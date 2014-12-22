<?php
/**
 * ludwigspeedup_logtiming
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigspeedup_logtiming is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigspeedup_logtiming is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigspeedup_logtiming; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigspeedup
 */
/**
 * ludwigspeedup_logtiming
 *
 * Analyze Modx Speed
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigspeedup sourcecode
 * @package ludwigspeedup
 **/
define('PKG_NAME', 'LudwigSpeedUP');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

$e = &$modx->Event;
if ($e->name == 'OnWebPageComplete')
{
	$id= $modx->resource->get('id');
	$parse_time= number_format(round(microtime(true) - $modx->startTime, 7), 7);
	$queries_time= number_format(round($modx->queryTime, 7), 7);

	$data = array(
		'id' => $id,
		'memory_peak' => array( floatval( memory_get_peak_usage(true) / 1048576 ) ),
		//'from_modx_cache' => array( $modx->sourceCache ), //_cacheFlag
		'from_plugin_cache' => array( boolval( true ) ),
		'total_queries' => array( intval( isset ($modx->executedQueries) ? $modx->executedQueries : 0 ) ),
		'total_queries_time' => array( floatval( $queries_time ) ),
		'total_parse_time' => array( floatval( $parse_time ) ),
		'total' => array( floatval( $parse_time + $queries_time ) )
	);
	
	$speedup_add = $modx->newObject('LogTimings', $data);
	$speedup_add->save();
/*
	// Decompress Timings
	$tv_content= gzuncompress( base64_decode ( $modx->resource->getTVValue('logtimings') ) );
	if ( ($tv_content != '') )
	{
		// Decode Json to Array
		$tv_ary= json_decode($tv_content, true);

		// Combine Arrays
		$new_ary= array();
		foreach( $data as $key => &$val )
		{
			$new_ary[$key]= array_merge( $tv_ary[$key], $val);
		}
		$new_value= json_encode( $new_ary );

	// Using it first time
	} else {
		$new_value= json_encode( $data );

	}

	// Save new stats $new_value
	if (!$modx->resource->setTVValue('logtimings', base64_encode( gzcompress( $new_value, 9 ) ) ))
	{
    	$modx->log(xPDO::LOG_LEVEL_ERROR, 'There was a problem saving your TV...');
	}
*/
}

return('');