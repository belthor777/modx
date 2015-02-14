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
 * Convert Markdown to HTML5 with Syntax Highlighter and Table of Content
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
	public $chunk_usesyntax= '';
	public $chunk_nosyntax= '';
	public $toc_css_id= '';
	public $toc_modx_tv= '';
	public $toc_level_max= 6;
	private $generated_toc= '';

	public function __construct( modX &$modx )
	{
		$this->modx =& $modx;

		// Syntax Highlighter Chunks
		$this->chunk_usesyntax= 'syntax_highlighter';
		$this->chunk_nosyntax= 'no_syntax_highlighter';

		// Table of Content
		$this->toc_css_id= 'table_of_content';
		$this->toc_modx_tv= 'table_of_content';
		$this->toc_level_max= 6;
	}


	// Extract Markdown from HTML
	// - Insert css class for markdown
	// - Start Markdown: <pre id="markdown">
	// - End Markdown: </pre>
	private function get_markdown( $content )
	{
		// Set Output Mime Type if Markdown is choosen
		$mime_type= $this->modx->resource->ContentType->get('mime_type');
		if ( $mime_type === 'text/x-markdown')
		{
			$this->modx->resource->ContentType->set('mime_type', 'text/html');
			return( $content );

		// Alternatively you can use <pre id="markdown">YOUR CONTENT</pre> in blocks
		// to write your articles in Markdown
		} else {

			$matches= array();
			preg_match_all( "|<pre id=\"markdown\">(.*)</pre>|Uis", $content, $matches );

			return( $matches );

		}
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

		// Markdown in blocks
		if( is_array($new_output) )
		{
			// Add article tag for CSS to all Blocks
			/*
			$output= preg_replace(	"|<pre class=\"markdown\">(.*)</pre>|Uis",
						"<article class=\"markdown\"><pre id=\"markdown\">$1</pre></article>",
						$output);
			*/

			foreach( $new_output[0] as $key => $val )
			{
				$output = str_replace( $val, $pandoc->runWith($matches[1][$key], $options), $output );
			}

		// Content without Markdown blocks
		} else {

			// Convert to HTML5 and add article tag to the content for CSS
			$output= $pandoc->runWith($new_output, $options);

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
		$new_output= $this->get_markdown( $output );

		// Markdown in blocks
		if( is_array($new_output) )
		{
			/*
			// Add article tag for CSS to all Blocks
			$output= preg_replace(	"|<pre id=\"markdown\">(.*)</pre>|Uis",
						"<article class=\"markdown\"><pre id=\"markdown\">$1</pre></article>",
						$output);
			*/

			foreach( $new_output[0] as $key => $val )
			{
				$output = str_replace( $val, $md->defaultTransform($new_output[1][$key]), $output );
			}

		// Content without Markdown blocks
		} else {

			// Convert to HTML5 and add article tag to the content for CSS
			$output= $md->defaultTransform($new_output);

		}

		// Add id to h1-h6
		$output= preg_replace_callback(	"#<h([2-6])>(.*)<\/h[2-6]>#Usi",
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
	private function add_css( $css_filename )
	{
		$this->modx->regClientCSS( '/assets/components/ludwigmarkdown/css/'. $css_filename );
	}

	// GeSHI Syntax highlighter
	// Highlight Syntax for every code block
	private function geshi_iterate_blocks($matches)
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

		# Geshiloader
		$search= array(	"#<pre class=\"(.*)\"><code>(.*)<\/code></pre>#Uis",	// Pandoc
				"#<pre><code>(.*)<\/code><\/pre>#Uis",			// Pandoc and PHP-Markdown
				"#<pre><code class=\"(.*)\">(.*)<\/code></pre>#Uis" );	// PHP-Markdown
		foreach ( $search as &$item )
		{
			if( preg_match($item, $output) )
			{
				// Iterate over all blocks
				$output= preg_replace_callback( $item, 'self::geshi_iterate_blocks', $output );
			}
		}

		// Responsible Table 
		// Add special div container before and after the table
		$output = str_replace(	array('<table', '</table>', '<table>'),
					array('<div class="resptable"><table', '</table></div>', '<table class="narrow">'), $output);

		return( $output );
	}

	// Create a link for internal content, based on header
	private function anchor_create( $text )
	{
		// Filter Anchors
		//$anchor_search = array('+', '!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
		$anchor_search = array('+', '%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
		$anchor_replace= array('-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

		return( str_replace( $anchor_search, $anchor_replace, urlencode( strtolower( $text ) ) ) );
	}

	// Generate Table of Contents
	private function toc_create( $content, $url, $page_title, $max_level )
	{
		preg_match_all( "#<h([2-6])([^<]*)>([^`]*?)<\/h[2-6]>#i", $content, $matches, PREG_SET_ORDER );
		$anchors= array();
		$toc= '<ol id="toc" class="ym-clearfix">'."\n";
		$i= 0;

		// Iterate all headers
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

				// Variables
				$anchors= array();
				$titles= array();

				// Search properties
				$is_anchor= preg_match( '/id=[\'|"](.*)?[\'|"]/i', stripslashes( $heading[2] ), $anchors );
				$is_title= preg_match( '/title=[\'|"](.*)?[\'|"]/i', stripslashes( $heading[2] ), $titles );

				// Use the given id
				if ( $is_anchor && $anchors[1] != '' )
				{
					$anchor= stripslashes( $anchors[1] );

				// Set manually an id="anchor_link_text" to the header
				// and replace header
				} else {

					$anchor= $this->anchor_create( $heading[3] );
					$content = substr_replace( $content, '<h'.$lvl.' id="'. $anchor .'"'.$heading[2].'>'.$heading[3].'</h'.$lvl.'>', strpos( $content, $heading[0] ), strlen( $heading[0] ) );

				}

				// Create title property for the link
				if ( $is_title && $titles[1] != '' )
				{
					$title= stripslashes( $titles[1] );

				} else {
					$title= $heading[3];
				}
				$title= trim( strip_tags( $title ) );


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
				$toc .= '<li class="toc'. ($lvl-1) .'"><a href="#'. $anchor .'" title="'. $page_title .' :: '. $title .'" class="toc anchor">'.$title.'</a>&nbsp;';
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


	// Generate Table of Content
	// $add:is an array: 
	//	begin: HTML at the beginning e.g. <h1>test123</h1>
	//	end: HTML at the end e.g. <h3>Your Comment</h3>
	//	Example: array('begin'=>'<h1 id="test123">test123</h1>', 'end'=>'<h2 id="add-your-comment">Add Your Comment</h2>' );
	public function generate_toc( $output= '', $add= array(), $insert_toc= 0 )
	{
		// Modx Template Variable
		$id = $this->modx->resource->get('id'); // This page's ID

		// Get TV status
		$tv_obj = $this->modx->getObject('modTemplateVar', array('name'=>$this->toc_modx_tv));
		$tv_value= ($tv_obj) ? $tv_obj->getValue($id) : false;

		if ( ( $tv_value === "true" ) && (!empty($output)) )
		{
			// Add additional content
			if (count($add) > 0)
			{
			        $output = (array_key_exists('begin', $add) ? $add['begin'] : '') .'\n'. $output;
			        $output .= (array_key_exists('end', $add) ? $add['end'] : '');
			}

			// Generate Table of Content
			$this->generated_toc= $this->toc_create($output, $this->modx->makeUrl($id), $this->modx->resource->get('menutitle'), $this->toc_level_max);

			// Add CSS to header
			$this->modx->markdown->add_css( 'toc.css' );
			
			// Insert TOC
			if ($insert_toc)
			{
				return( $this->insert_toc( $output ) );
			}
		}
	}


	// Insert table of content
	public function insert_toc( $output= '' )
	{
		// Define variables
		$toc_tag= array();

		// Look in content for the table_of_content id
		// '<div id="table_of_content" class="box info"></div>'
		/*
		Array
		(
			[0] => <div id="table_of_content" class="box info"></div>
			[1] => div 
			[2] =>  class="box info"
			[3] => div
		)
		*/
		preg_match("#<(p|div|aside|section) id=\"". $this->toc_css_id ."\"([^>]*)><\/(p|div|aside|section)>#i", $output, $toc_tag);

		// Is Table of Content already generated?
		if ( !empty($this->generated_toc) && (count($toc_tag) > 0) )
		{
			$new_toc= '<'. $toc_tag[1] .' id="'. $this->toc_css_id .'"'. $toc_tag[2] .'>'. $this->generated_toc .'</'. $toc_tag[3] .'>';

			// Insert Table of Content
			$output= str_replace( $toc_tag[0], $new_toc, $output );

		// Found Tag but do not create a table of content
		} else if ( count($toc_tag) > 0 ) {

			$output= str_replace( $toc_tag[0], '', $output);

		}

		return( $output );
	}
	
}
