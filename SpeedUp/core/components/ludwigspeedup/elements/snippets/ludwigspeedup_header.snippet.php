<?php
/**
 * ludwigspeedup_header
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
 * ludwigspeedup_header
 *
 * Analyze Modx Speed
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigspeedup sourcecode
 * @package ludwigdisqus
 **/
define('PKG_NAME', 'LudwigSpeedUP');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

// Get Content Types in Modx
function get_contenType_id( $type= array('text/javascript' => 0, 'text/css' => 0) )
{
		global $modx;

		// Get Content Types: use $type[MIMETYPE]
		$query= $modx->newQuery('modContentType');
		$query->sortby('id');
		$collection= $modx->getCollection('modContentType', $query);
   		foreach ($collection as $key => $c) 
		{
			if (array_key_exists( $c->get('mime_type'), $type ) )
			{
				$type[$c->get('mime_type')]= $c->get('id');
			}
   		}

		return( $type );
}

// Get all IDs of Services
function services( $service_id, $depth=2 )
{
		global $modx;

		// Get MIME Types
		$mime_types= get_contenType_id();

        // Query all childrens
        $classname= 'modResource';
        $c = $modx->newQuery( $classname );
        $children = $modx->getChildIds( (int)$service_id, $depth );
        if (count($children) > 0)
        {
                $filter = array( 'id:IN' => $children,
                                'published' => 1,
                                'content_type:IN' => array_values( $mime_types ) );
                $c->where( $filter, xPDOQuery::SQL_AND );
        }

        // sort by menuindex ascending
        $c->sortby('menuindex','ASC');

        // get the resources as xPDOObjects
        $resources= $modx->getCollection($classname,$c);

        // Generate Cache
        $ids= array();
        foreach ($resources as $resource)
        {
                // Catch IDs
                $ids[array_search($resource->get('content_type'), $mime_types)][]= $resource->get('id');
        }

		return( $ids );
}


// Get Links and Scripts
// Unset not needed entries
function prepare_tv( &$ary )
{
	$out_ary= array('link' => array(), 'script' => array());
	foreach ($ary as $key => $value) 
	{
		if( preg_match_all('/(<(script|link).*?(href|src)=[\'|"](.*?)[\'|"])/is', $value, $matches, PREG_SET_ORDER) )
		{
			$out_ary[$matches[0][2]][]= $matches[0][4];
			//unset($ary[$key]);
		}
	}

	// Rebase Array
	$ary= array_values($ary);

	return( $out_ary );
}


// Generate URL
function generate_url( $url, $type, $query, $seofriendly=0 )
{

	// Seo friendly?
	if ($seofriendly)
	{
		$gen_url= $url .'_'. urlencode( $query ) .'.'. $type;

	} else {

		$gen_url= $url. '.php?'. http_build_query( array($type => $query), '', '&amp;');
	}

	return ($gen_url);
}



// Parameter
$doc_id= $modx->resource->get('id');


if ($doc_id == 52900 )
{

	$service_id= $modx->getOption('sid', $scriptProperties, 647, TRUE);	// Get Folder for CSS and JS scripts
	$depth= $modx->getOption('depth', $scriptProperties, 2, TRUE);	// Recursive search depth
	$seofriendly= $modx->getOption('seo', $scriptProperties, 1, TRUE);	// Recursive search depth

	// Parameter
	$url= '/assets/components/ludwigspeedup/services';	// Url to the services

	// Scripts before body end and in head
	// prepare_tv( $modx->sjscripts )
	// prepare_tv( $modx->jscripts )
	$tv_content = array(
		'head' => array(),
		'body' => array(),
		'services' => ''
	);

	// Find js and css ressources
	$services= array();
	if ( $service_id !== 0 )
	{
		$services= services( $service_id, $depth );
        foreach ($services as $key => $v_ary)
        {
			$crypt_link= base64_encode(gzcompress( serialize($v_ary), 9 ));
			switch ( $key )
			{
				// Before BODY end
            	case 'text/javascript':
					$modx->regClientScript( generate_url( $url, 'js', $crypt_link, $seofriendly ) );
					break;

				// Before HEAD end
            	case 'text/css':
					$modx->regClientCSS( generate_url( $url, 'css', $crypt_link, $seofriendly ) );
					break;

			}
		}
		unset($services);
	}


/*
var_dump( $services );

var_dump( $modx->sjscripts );
var_dump( $modx->jscripts );
var_dump( $tv_content );
exit();
*/

		// Save Extra Scripts to TV
		//$modx->resource->setTVValue( 'LudwigSpeedUP', $tv_content );

		// Generate URL
		//$makeurl= '/assets/components/ludwigspeedup/services.php?sid='. $service_id .'&id='. $doc_id;

		// Register JS File
		//$modx->regClientHTMLBlock('<script type="text/javascript" src="'. $makeurl .'&type='. $type['text/javascript'] .'" async></script>');
}
return('');