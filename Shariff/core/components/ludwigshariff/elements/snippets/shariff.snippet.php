<?php
/**
 * Shariff
 *
 * Copyright 2015 by Thomas Ludwig <thomas@ludwig.im>
 *
 * Shariff is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Shariff is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Shariff; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigshariff
 * @subpackage snippet
 *            
 * @author Thomas Ludwig (thomas@ludwig.im)
 * @copyright Copyright 2015, Thomas Ludwig
 * @version 1.0.0
 */
$pkg = "ludwigshariff";
$output = "";

// Is this Extra activated?
if ( $modx->getOption( $pkg . '.activated', null, false, true ) )
{
	
	// Filter <code> and </code> from variables
	// It's a bug in my installation, when I'm using Markdown
	foreach( $scriptProperties as $key => $val )
	{
		if ( is_string( $val ) )
		{
			// Remove prefix <code>
			if ( substr( $val, 0, strlen( "<code>" ) ) == "<code>" )
			{
				$val = substr( $val, strlen( "<code>" ) );
				
				// Remove </code> at the end
				if ( substr( $val, -strlen( "</code>" ) ) === "</code>" )
				{
					$scriptProperties[$key] = substr( $val, 0, -strlen( "</code>" ) );
				}
			}
		}
	}
	
	// Check Parameters and set them to default values
	$class = $modx->getOption( 'class', $scriptProperties, "shariff" ); // CSS/JS class
	$addcss = $modx->getOption( 'addcss', $scriptProperties, 1 ); // Add CSS to Modx
	$addjs = $modx->getOption( 'addjs', $scriptProperties, 1 ); // Add JS to Modx
	$assets_path = $modx->getOption( $pkg . '.assets_url', null, MODX_ASSETS_URL . 'components/' . $pkg . '/' );
	$backend = $modx->getOption( 'backend', $scriptProperties, 1 ); // Use Modx API REST Backend?
	
	$srv = $modx->getOption( 'srv', $scriptProperties, 'twitter,facebook,googleplus,linkedin,pinterest,xing,whatsapp' ); // Services
	$theme = $modx->getOption( 'theme', $scriptProperties, '' ); // Themes
	$orientation = $modx->getOption( 'orientation', $scriptProperties, '' ); // Orientation
	$infoUrl = $modx->getOption( 'infoUrl', $scriptProperties, '' ); // Information URL
	$extUrl = $modx->getOption( 'extUrl', $scriptProperties, false ); // External URL: Has to be defined in the whitelist
	$lang = $modx->getOption( 'lang', $scriptProperties, $modx->getOption( 'cultureKey' ) ); // Language
	
	$cssid = $modx->getOption( 'cssid', $scriptProperties, '' ); // Individual ID to style the a special element
	                                                          
	// Jquery exists?
	$needJquery = $modx->getOption( 'needJquery', $scriptProperties, 1 ); // Does we need jquery or is it already installed?
	                                                                   
	// AweSomeFonts exists?
	$needASF = $modx->getOption( 'needASF', $scriptProperties, 1 ); // Does we need AweSomeFonts or is it already installed?
	                                                             
	// Check if infobutton is needed
	if ( ( $infoUrl !== '' ) && ( strpos( $srv, "info" ) === false ) )
	{
		$srv .= ',info';
	}
	
	// Prepare Services
	if ( $srv !== '' )
	{
		$srv = htmlspecialchars( json_encode( explode( ',', str_replace( ' ', '', $srv ) ) ), ENT_QUOTES );
	}
	
	// Prepare Shariff options
	$data = array(
		"class" => $class, 
		"data-backend-url" => ( ( $backend ) ? $assets_path . "services.php" : '' ), 
		"data-url" => rtrim( ( ( !$extUrl ) ? $modx->makeUrl( $modx->resource->get( 'id' ), '', '', 'full' ) : $extUrl ), "/" ), 
		"data-services" => $srv, 
		"data-theme" => $theme, 
		"data-orientation" => $orientation, 
		"data-lang" => $lang, 
		"data-info-url" => $infoUrl
	);
	
	// Add Shariff CSS files
	if ( $addcss )
	{
		$css_file = ( $needASF ) ? 'css/shariff.complete.css' : 'css/shariff.min.css';
		$modx->regClientCSS( $assets_path . $css_file );
	}
	
	// Add Shariff JS files
	if ( $addjs )
	{
		$js_file = ( $needJquery ) ? 'js/shariff.complete.js' : 'js/shariff.min.js';
		$modx->regClientScript( $assets_path . $js_file );
	}
	
	// Build HTML Tag
	foreach( $data as $row => $value )
	{
		if ( $value != '' )
			$tags .= $row . '="' . $value . '" ';
	}
	$output = '<div ' . $tags . '></div>';
	
	// Individual ID
	if ( !empty( $cssid ) )
	{
		$output = '<div id="' . $cssid . '">' . $output . '</div>';
	}

}

return ( $output );