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

// Variables
$output= '';

// Decompress Timings
$tv_content= gzuncompress( base64_decode ( $modx->resource->getTVValue('logtimings') ) );
if ( ($tv_content != '') )
{
	// Decode Json to Array
	$tv_ary= json_decode($tv_content, true);

	$data= array();
	for( $i= 0; $i < count($tv_ary["memory_peak"]); $i++ )
	{
		$n= $i+1;
		$data[]=  "[ $n,". $tv_ary["total_queries_time"][$i] .','. $tv_ary["total_parse_time"][$i] .','. $tv_ary["total"][$i] ." ]";
	}

	$output= $modx->getChunk('logtiming_charts', array(
		'data' => implode(', ', $data),
		'legend' => "",
		'vAxis.title' => "'Time [s]'",
		'hAxis.title' => "'Measured Values'"
	));
}

return( $output );