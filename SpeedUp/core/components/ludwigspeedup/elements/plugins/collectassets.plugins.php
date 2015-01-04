<?php
/**
 * ludwigspeedup_collectassets
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigspeedup_header is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigspeedup_header is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigspeedup_header; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigspeedup
 */
/**
 * ludwigspeedup_collectassets
 *
 * Compress JS and CSS content from MODX API
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigspeedup sourcecode
 * @package ludwigspeedup
 **/
$PKG_NAME= 'LudwigSpeedUp';
$PKG_NAME_LOWER= strtolower($PKG_NAME);

// Wait for the right System Event
$e = &$modx->Event;
switch ($e->name)
{

	// This event fires before any tags are parsed, we are going to use this:
	// - Add the template CSS files (setting_services in context)
	case 'OnLoadWebDocument':
		break;


	// This fires after all tags have been parsed (before the page is delivered to the browser)
	case 'OnWebPagePrerender':

		// Get System Setting Options for activation
		$activated = array(	'extra' => $modx->getOption( $PKG_NAME_LOWER .'.activated', null, false, true ),
					'minify_html' => $modx->getOption( $PKG_NAME_LOWER .'.collectassets.minify_html', null, true, true ),
					'collectassets' => $modx->getOption( $PKG_NAME_LOWER .'.use_collectassets', null, true, true ) );

		// Check if package is installed and activated
		$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
		if(!$modx->loadClass($PKG_NAME, $ldpath, true, true) || !$activated['extra'] || !$activated['collectassets'] )
		{
			return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

		} else {

			// Get MODX content
			$content = &$modx->resource->_output;

			// Load Class
			$lsu = new LudwigSpeedUp( $modx, $content );

			// Add extra assets like CSS and JS from plugins or snippets to your content
			$lsu->add_extra_assets();

			// Add service assets like CSS and JS to your content
			$service_id= $modx->context->getOption('services', null, 0, true); // Get setting_services in your context
			$lsu->add_service_assets( $service_id );

			// Clean HTML
			if ( $activated['minify_html'] )
			{
				$lsu->minify_html();
			}
		}
		break;


	// This event fires right before the cache is written to.
	case 'OnBeforeSaveWebPageCache':
		break;


	default:
		break;
}