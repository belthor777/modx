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
 * Optimize Javascript and CSS
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigspeedup
 * @package ludwigspeedup
 */

// Defines
define('PKG_NAME', 'LudwigSpeedUP');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

// Include Modx Classes
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

// Initialize Modx
$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');

// Get External Files
function getExternal( $url= '' )
{
	global $modx;

	/* REST API config */
	$config = array_merge(array(
			'format' => 'json', // json or xml, the format to request
			'suppressSuffix' => true, // if false, will append .json or .xml to the URI requested
			'curlOptions' => array(
				'timeout' => 30, // cURL timeout
				'otherCurlOption' => 1,
			),
			'headers' => array(),
			'userAgent' => 'MODX RestClient/1.0.0',
			'defaultParameters' => array(),
	));

	/* load the ModX REST service */
	$client= $modx->getService('rest','rest.modRest','', $config);
	return( $client->get($url)->responseBody );
}

// Minify
function minify( $output= '' )
{
	// comments
	$output = preg_replace('!/\*.*?\*/!s','', $output);
	$output = preg_replace('/\n\s*\n/',"\n", $output);

	// space
	$output = preg_replace('/[\n\r \t]/',' ', $output);
	$output = preg_replace('/ +/',' ', $output);
	$output = preg_replace('/ ?([,:;{}]) ?/','$1',$output);

	// trailing;
	$output = preg_replace('/;}/','}',$output);

	return( trim( $output ) );
}


// System Settings
$cache_expires= $modx->getOption( PKG_NAME_LOWER .'.cache_expires', null, 3600, true);

// Parameter
$doc_id= filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, array('options'=>array('default' => 0, 'min_range'=>0)));
$service_id= filter_input(INPUT_GET, 'sid', FILTER_VALIDATE_INT, array('options'=>array('default' => 0, 'min_range'=>0)));
$service_type= filter_input(INPUT_GET, 'type', FILTER_VALIDATE_INT, array('options'=>array('default' => 5, 'min_range'=>0, 'max_range'=>100)));
$depth= filter_input(INPUT_GET, 'depth', FILTER_VALIDATE_INT, array('options'=>array('default' => 10, 'min_range'=>0, 'max_range'=>100)));

// Check if the doc_id is using a script
$tv_content= '';
if ($doc_id)
{
	$tv_content= $modx->getObject('modResource', $doc_id)->getTVValue(PKG_NAME);
}

// Using Modx Cache for 1h per URL
$cache= array(  "opt" => array( xPDO::OPT_CACHE_KEY => PKG_NAME, xPDO::OPT_CACHE_EXPIRES => $cache_expires ),
                "name" => PKG_NAME_LOWER .'_cache2_'. md5($service_id .'_'. $service_type) );
$output= $modx->cacheManager->get($cache["name"], $cache["opt"]);

// Load classes
if (empty($output["content"]) || is_null($output["content"]) )
{

	// Get MIMETYPE
	$contentType = $modx->getObject('modContentType', array('id' => (int)$service_type));
	$mime_type= $contentType->get('mime_type');
	$mime_type= ( $mime_type === 'text/javascript' ) ? 'application/x-javascript' : $mime_type;

	// Query all childrens
	$classname= 'modResource';
	$c = $modx->newQuery( $classname );
	$children = $modx->getChildIds( (int)$service_id, $depth );
	if (count($children) > 0)
	{
		$filter = array( 'id:IN' => $children,
				'published' => 1,
				'content_type' => (int)$service_type);
		$c->where( $filter, xPDOQuery::SQL_AND );
	}

	// sort by menuindex ascending
	$c->sortby('menuindex','ASC');

	// get the resources as xPDOObjects
	$resources= $modx->getCollection($classname,$c);

	// Generate Cache
	$content= '';
	foreach ($resources as $resource)
	{
		// Select class key
		// Get content of ressource
		switch ( $resource->get('class_key') )
		{
			case 'modWebLink':
				$makeurl= $resource->get('content');
				if ( $makeurl[0] === '/' )
				{
					$makeurl = MODX_SITE_URL . $makeurl;
				}
				$content .= getExternal( $makeurl );
				break;

			default:
				$content .= $resource->get('content');
				break;
		}
	}

	// Initial Minify
	if ( $mime_type === 'application/x-javascript' )
	{

		$path = $modx->getOption( PKG_NAME_LOWER .'.core_path', null, $modx->getOption('core_path').'components/'. PKG_NAME_LOWER .'/');
		require_once( $path ."/model/Minifier.php" );
		if (class_exists('\JShrink\Minifier'))
		{
			$content = \JShrink\Minifier::minify( $content );
		}

	} else if ( $mime_type === 'text/css' ) {
		$content = minify( $content );

	}

	// Cache results
	$output= array( "header" => $mime_type, "content" => trim( $content ) );
	$modx->cacheManager->set($cache["name"], $output, $cache_expires, $cache["opt"]);
}

// this will end the output buffer and discard silently what ever was in it
ob_end_clean();

// Output Header
header("Content-type: ". $output["header"] ."; charset: UTF-8");

echo $output["content"];
?>
