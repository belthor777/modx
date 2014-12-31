<?php
/**
 * ludwigmarkdown
 * Copyright 2015 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigmarkdown is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigmarkdown is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigmarkdown; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigmarkdown
 */
/**
 * ludwigmarkdown
 *
 * Convert Markdown to HTML5
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigmarkdown sourcecode
 * @package ludwigmarkdown
 **/
$PKG_NAME= 'LudwigMarkdown';
$PKG_NAME_LOWER= strtolower($PKG_NAME);

// Check if the Extra is enabled
$activated = array(	'extra' => $modx->getOption(	$PKG_NAME_LOWER .'.activated'),
					'syntaxhighlight' => $modx->getOption( $PKG_NAME_LOWER .'.use_syntaxhighlight'),
					'toc' => $modx->getOption( $PKG_NAME_LOWER .'.use_toc'),
					'use_pandoc' => $modx->getOption( $PKG_NAME_LOWER .'.use_pandoc') );

$e = &$modx->Event;
switch ($e->name)
{
	// This event fires before any tags are parsed, we are going to use this to
	// convert the markdown content
	case 'OnLoadWebDocument':

		// Check if package is installed and activated
		$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
		if(!$modx->loadClass($PKG_NAME, $ldpath, true, true) || !$activated['extra'] )
		{
			return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

		} else {

			// Get Content
			$output= $modx->resource->get('content');

			// Select Parser: Default PHP-Markdown
			$modx->markdown = new LudwigMarkdown($modx);
			if ($activated['use_pandoc'])
			{
				$output= $modx->markdown->generate_pandoc( $output );

			// Use PHP-Markdown
			} else {

				$output= $modx->markdown->generate_phpmarkdown( $output );
			}

			// Use Syntax Highlighter Geshi?
			if ($activated['syntaxhighlight'])
			{
				$output= $modx->markdown->generate_geshi( $output );
			}

			// Add table of content
			if ($activated['toc'])
		  	{
				$modx->markdown->generate_toc( $output );
			}

			// Write Content to MODX Resource; NOT TO DATABASE!
			$modx->resource->set('content', $output);

		}

		break;


	// This fires after all tags have been parsed (actually, right before the
	// page is delivered to the browser).
	case 'OnWebPagePrerender':

		// Check if package is already initialized
		if ( class_exists('LudwigMarkdown') && ($modx->markdown) && $activated['toc'] )
		{
			$modx->resource->_output= $modx->markdown->insert_toc( $modx->resource->_output );
		}

		break;


	// This event fires right before the cache is written to.
	case 'OnBeforeSaveWebPageCache':
		break;


	default:
		break;
}