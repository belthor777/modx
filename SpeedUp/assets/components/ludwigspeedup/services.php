<?php
/**
 * LudwigSpeedUp
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigSpeedUp is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigSpeedUp is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigSpeedUp; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigspeedup
 */
/**
 * Get assets
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 *          version 2 or (at your option) any later version for ludwigspeedup
 * @package ludwigspeedup
 */

// Package Variables
$PKG_NAME = 'LudwigSpeedUp';
$PKG_NAME_LOWER = strtolower( $PKG_NAME );

// Include Modx Classes
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

// Initialize Modx
$modx = new modX();
$modx->initialize( 'web' );
$modx->getService( 'error', 'error.modError', '', '' );

// MODX CSS and JS resources by using context 'setting_services'
$css_in = filter_input( INPUT_GET, 'css' );
$js_in = filter_input( INPUT_GET, 'js' );
$extra = filter_input( INPUT_GET, 'extra' );

// Choose the right variable
$mime_type = !empty( $css_in ) ? 'text/css' : 'text/javascript';
$in_str = !empty( $css_in ) ? $css_in : $js_in;

// Prepare empty output
$output = array(
	"header" => $mime_type, 
	"content" => ''
);

// Include Extra Class
$ldpath = MODX_CORE_PATH . 'components/' . $PKG_NAME_LOWER . '/model/';
if ( !$modx->loadClass( $PKG_NAME, $ldpath, true, true ) )
{
	return ( 'There was a problem adding the ' . $PKG_NAME . ' package!  Check the logs for more info!' );
} else
{
	
	// Load Class
	$lsu = new LudwigSpeedUp( $modx );
	if ( !empty( $in_str ) )
	{
		// Is Plugin Cache activated?
		$cache_plugin = $modx->getOption( $PKG_NAME_LOWER . '.plugin-cache_enabled', null, false, true );
		
		// Is the content already cached?
		// if ( !$lsu->is_cached( $in_str, $cache_plugin ) )
		if ( true )
		{
			
			// Get plugin or snippet assets
			if ( !empty( $extra ) && intval( $in_str ) )
			{
				$lsu->get_extra_content( $in_str, $mime_type );
				
				// Get MODX service resource assets
			} else
			{
				
				// Is it an extra asset?
				$raw_str = gzinflate( base64_decode( urldecode( $in_str ) ) );
				if ( ( strlen( $raw_str ) > 6 ) && ( substr( $raw_str, -6 ) === '_extra' ) )
				{
					$extra = 1;
					$raw_str = substr( $raw_str, 0, -6 );
				}
				
				// Get MODX and external ressources
				$in_ary = json_decode( $raw_str, true );
				if ( is_array( $in_ary ) && ( count( $in_ary ) > 0 ) )
				{
					$lsu->get_service_content( $in_ary, $mime_type );
				} else
				{
					// It is an extra
					$lsu->get_extra_content( $raw_str, $mime_type );
				}
			}
			
			// Asset is extracted, so we can minify it
			if ( !empty( $lsu->content ) )
			{
				// Minify CSS
				if ( $mime_type === 'text/css' )
				{
					$lsu->minify_css();
					
					// Minify JS
				} else if ( $mime_type === 'text/javascript' )
				{
					
					$lsu->minify_js();
				}
			}
			
			// Prepare results for caching and cache it
			$output = array(
				"header" => $mime_type, 
				"content" => trim( $lsu->content )
			);
			
			// Is Plugin Cache activated?
			if ( $cache_plugin )
			{
				$lsu->cache_me( $output );
			}
			
			// Content is cached, open it!
		} else
		{
			
			$output = $lsu->cached_content;
		}
	}
}

// this will end the output buffer and discard silently what ever was in it
ob_end_clean();

// Output Header
header( "Content-type: " . $output["header"] . "; charset: UTF-8" );

echo $output["content"];

?>
