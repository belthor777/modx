<?php
/**
 * LudwigMarkdown
 * Copyright 2015 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigMarkdown is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigMarkdown is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigMarkdown; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigmarkdown
 */
/**
 * Convert Markdown to HTML5
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigmarkdown
 * @package ludwigmarkdown
 */

class LudwigMarkdown
{
	public $modx;
	public $chunk_usesyntax;
	public $chunk_nosyntax;

	public function __construct( modX &$modx )
	{
		$this->modx =& $modx;

		// Syntax Highlighter Chunks
		$this->chunk_usesyntax= 'syntax_highlighter';
		$this->chunk_nosyntax= 'no_syntax_highlighter';
	}


	// Extract Markdown from HTML
	// - Insert css class for markdown
	// - Start Markdown: <pre id="markdown">
	// - End Markdown: </pre>
	public function get_markdown( $content )
	{
		$output= preg_replace(	"|<pre id=\"markdown\">(.*)</pre>|Uis",
					"<article class=\"markdown\"><pre id=\"markdown\">$1</pre></article>",
					$content);
		return( $output );
	}


	// Generate HTML5 with Pandoc
	// You have to install Pandoc under Ubuntu
	// with: apt-get install pandoc
	public function generate_pandoc( $output= '' )
	{
		require_once( dirname(__FILE__) .'/pandoc-php/src/Pandoc/pandoc.php' );

		$pandoc = new Pandoc\Pandoc();
		$options = array(	"from" => "markdown_github",
					"to" => "html5",
					"ascii" => null,
					"normalize" => null,
					"no-highlight" => null,
					"email-obfuscation" => "none",
					"from" => "markdown-markdown_in_html_blocks" );

		// Find all Markdown blocks
		// and replace them with converted HTML5
		$output= $this->get_markdown( $output );
		preg_match_all( "|<pre id=\"markdown\">(.*)</pre>|Uis", $output, $matches );
		foreach( $matches[0] as $key => $val )
		{
			$output = str_replace( $val, $pandoc->runWith($matches[1][$key], $options), $output );
		}

		// Add CSS file
		$this->add_css( 'markdown.css' );

		return( $output );
	}


	// Generate HTML5 with PHP-Markdown
	public function generate_phpmarkdown( $output= '' )
	{
		require_once( dirname(__FILE__) .'/php-markdown/Michelf/MarkdownExtra.inc.php' );

		$md= new \Michelf\MarkdownExtra;

		// Configure PHP-Markdown
		$md->empty_element_suffix = "/>";
		$md->tab_width = 4;
		$md->no_markup = false; // TRUE -> Prevent HTML tags in the input from being passed to the output.
		$md->no_entities = false;
		$md->code_attr_on_pre = false; // Use <code> tag;

		// Find all Markdown blocks
		// and replace them with converted HTML5
		$output= $this->get_markdown( $output );
		preg_match_all( "|<pre id=\"markdown\">(.*)</pre>|Uis", $output, $matches );
		foreach( $matches[0] as $key => $val )
		{
			$output = str_replace( $val, $md->defaultTransform($matches[1][$key]), $output );
		}

		// Add id to h1-h6
		$output= preg_replace_callback(	"#<h([1-6])>(.*)<\/h[1-6]>#Usi",
						function($m) {
							$s= array('+', '.');
							$r= array('-', '');
							return '<h'. $m[1] .' id="'. str_replace($s, $r, urlencode(strtolower(strip_tags($m[2])))) .'">'. $m[2] .'</h'. $m[1] .'>';
						},
						$output );
						
		// Add CSS file
		$this->add_css( 'markdown.css' );

		return( $output );
	}

	// Add the right CSS to MODX
	public function add_css( $css_filename )
	{
		$this->modx->regClientCSS( '/assets/components/ludwigmarkdown/css/'. $css_filename );
	}

	// GeSHI Syntax highlighter
	// Highlight Syntax for every code block
	public function geshiloader($matches) 
	{
		$l= (count($matches) == 3) ? $matches[1] : '';
		$src= (count($matches) == 3) ? $matches[2] : $matches[1];

		if ($l != '')
		{
			require_once( dirname(__FILE__) .'/geshi-1.0/src/geshi.php' );
			$geshi = new GeSHi( html_entity_decode(trim($src), ENT_QUOTES), $l);

			// Options
			$geshi->enable_keyword_links(false);
			$geshi->enable_classes(true);
			$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS);
			$geshi->set_header_type(GESHI_HEADER_NONE);
			$geshi->set_tab_width(4);

			// Add CSS file
			$this->add_css( 'highlighter/'. $l .'.css' );

			// Return Chunk with Syntax Highlighter
			return( $this->modx->getChunk($this->chunk_usesyntax, array( 'code' => $geshi->parse_code(), 'language' => $l ) ) );
		}

		// Return Chunk without Syntax Highlighter
		return( $this->modx->getChunk($this->chunk_nosyntax, array( 'code' => $src ) ) );
	}


	// Highlight Syntax with Geshi
	public function generate_geshi( $output )
	{

		// Add Geshi CSS file
		$geschi_found= false;

		# Geshiloader
		$search= array(	"#<pre class=\"(.*)\"><code>(.*)<\/code></pre>#Uis",	// Pandoc
				"#<pre><code>(.*)<\/code><\/pre>#Uis",			// Pandoc and PHP-Markdown
				"#<pre><code class=\"(.*)\">(.*)<\/code></pre>#Uis" );	// PHP-Markdown
		foreach ( $search as &$item )
		{
			if( preg_match($item, $output) )
			{
				// If Geshi block found, add Geshi CSS file
				if (!$geschi_found)
				{
					$this->add_css( 'highlighter/geshi.css' );
				}
				$geschi_found= true;
				
				// Iterate over all blocks
				$output= preg_replace_callback( $item, 'self::geshiloader', $output );
			}
		}

		// Responsible Table 
		// Add special div container before and after the table
		$output = str_replace(	array('<table', '</table>', '<table>'),
					array('<div class="resptable"><table', '</table></div>', '<table class="narrow">'), $output);

		return( $output );
	}


	// Generate Table of Contents
	public function generate_toc( $content, $url, $page_title, $max_level )
	{
		preg_match_all( '/<h([1-6])([^<]+)>(.*)<\/h[1-6]>/i', $content, $matches, PREG_SET_ORDER );
		$anchors= array();
		$toc= '<ol id="toc" class="ym-clearfix">'."\n";
		$i= 0;

		foreach ( $matches as $heading )
		{

			if ($i == 0)
			{
				$startlvl = $heading[1];
			}
			$lvl = $heading[1];

			// Remove URL and other html tags from Title
			$heading[3] = strip_tags($heading[3]);

			// Maximal Level
			if ($lvl < $max_level)
			{
			$ret = preg_match( '/id=[\'|"](.*)?[\'|"]/i', stripslashes($heading[2]), $anchor );
			if ( $ret && $anchor[1] != '' )
			{

				$anchor = stripslashes( $anchor[1] );
				$add_id = false;

			} else {

				$anchor = preg_replace( '/\s+/', '-', preg_replace('/[^a-z\s]/', '', strtolower( $heading[3] ) ) );
				$add_id = true;

			}

			if ( !in_array( $anchor, $anchors ) )
			{
				$anchors[] = $anchor;

			} else {

				$orig_anchor = $anchor;
				$i = 2;
				while ( in_array( $anchor, $anchors ) )
				{
					$anchor = $orig_anchor.'-'.$i;
					$i++;
				}
				$anchors[] = $anchor;

			}

			if ( $add_id )
			{
				$content = substr_replace( $content, '<h'.$lvl.' id="'.$anchor.'"'.$heading[2].'>'.$heading[3].'</h'.$lvl.'>', strpos( $content, $heading[0] ), strlen( $heading[0] ) );
			}

			$ret = preg_match( '/title=[\'|"](.*)?[\'|"]/i', stripslashes( $heading[2] ), $title );
			if ( $ret && $title[1] != '' )
			{
				$title = stripslashes( $title[1] );

			} else {
				$title = $heading[3];
			}
			$title = trim( strip_tags( $title ) );

			if ($i > 0)
			{
				if ($prevlvl < $lvl)
				{
					$toc .= "\n<ol class=\"toc". ($lvl-1) ."\">"."\n";

				} else if ($prevlvl > $lvl) {

					$toc .= '</li>'."\n";
					while ($prevlvl > $lvl)
					{
						$toc .= "</ol>"."\n".'</li>'."\n";
						$prevlvl--;
					}

				} else {
					$toc .= '</li>'."\n";
				}
			}

			$j = 0;
			$toc .= '<li class="toc'. ($lvl-1) .'"><a href="#'.$anchor.'" title="'. $page_title .'::'. $title .'" class="toc anchor">'.$title.'</a>&nbsp;';
			$prevlvl = $lvl;

			$i++;
			}
		}
		unset( $anchors );

		while ( $lvl > $startlvl )
		{
			$toc .= "\n</ol>";
			$lvl--;
		}

		$toc .= '</li>'."\n";
		$toc .= '</ol>'."\n";

		return($toc);
	}

}
