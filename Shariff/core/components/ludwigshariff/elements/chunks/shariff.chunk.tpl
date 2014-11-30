<?php
/**
 * Shariff
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
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
 * @author      Thomas Ludwig (thomas@ludwig.im)
 * @copyright   Copyright 2014, Thomas Ludwig
 * @version     1.0.0
 */
$pkg= "ludwigshariff";

// Is this Extra activated?
if ($modx->getOption( $pkg .'.activated', null, false, true ))
{

  // Check Parameters and set them to default values
  $class= $modx->getOption('class', $scriptProperties, "shariff");	// CSS/JS class
  $addcss= $modx->getOption('addcss', $scriptProperties, 1);	// Add CSS to Modx
  $addjs=  $modx->getOption('addjs', $scriptProperties, 1);	// Add JS to Modx
  $assets_path= $modx->getOption( $pkg .'.assets_url', null, MODX_ASSETS_URL .'components/'. $pkg .'/');
  $backend= $modx->getOption('backend', $scriptProperties, 1);	// Use Modx API REST Backend?

  $srv= $modx->getOption('srv', $scriptProperties, 'twitter,facebook,googleplus');	// Services
  $theme= $modx->getOption('theme', $scriptProperties, '');	// Themes
  $orientation= $modx->getOption('orientation', $scriptProperties, '');	// Orientation
  $infoUrl= $modx->getOption('infoUrl', $scriptProperties, '');	// Information URL
  $extUrl= $modx->getOption('extUrl', $scriptProperties, false); // External URL: Has to be defined in the whitelist
  $lang= $modx->getOption('lang', $scriptProperties, $modx->getOption('cultureKey'));	// Language

  // Jquery exists?
  $needJquery= $modx->getOption('needJquery', $scriptProperties, 1);	// Does we need jquery or is it already installed?

  // Check if infobutton is needed
  if ( ($infoUrl !== '') && (strpos($srv, "info") === false) )
  {
	  $srv .= ',info';
  }

  // Prepare Services
  if ($srv !== '') 
  {
  	$srv= htmlspecialchars( json_encode( explode(',', str_replace(' ', '', $srv) ) ), ENT_QUOTES );
  }

  // Prepare Shariff options
  $data= array(	 "class" => $class,
				  "data-backend-url" => ( ($backend) ? $assets_path ."services.php" : '' ),
				  "data-url" => ( (!$extUrl) ? $modx->makeUrl( $modx->resource->get('id'), '', '', 'full' ) : $extUrl ),
				  "data-services" => $srv,
				  "data-theme" => $theme,
				  "data-orientation" => $orientation,
				  "data-lang" => $lang,
				  "data-info-url" => $infoUrl );

  // Add Shariff CSS files
  if ($addcss)
  {
		$modx->regClientCSS( $assets_path . 'css/shariff.min.css' );
  }

  // Add Shariff JS files
  if ($addjs)
  {
		$js_file= ($needJquery) ? 'js/shariff.complete.js' : 'js/shariff.min.js';
		$modx->regClientScript( $assets_path . $js_file );
  }

  // Build HTML Tag
  foreach ($data as $row => $value) 
  {
	  if ($value != '')
		  $tags .= $row .'="'. $value .'" ';
  }
  return( '<div '. $tags .'></div>' );

}

return('');