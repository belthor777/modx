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
$PKG_NAME= 'LudwigSpeedUP';
$PKG_NAME_LOWER= strtolower($PKG_NAME);

$e = &$modx->Event;
if ($e->name == 'OnWebPageComplete')
{
	// Check if the Extra as well as LogTiming is enabled
	$activated = array(	'extra' => $modx->getOption( $PKG_NAME_LOWER .'.activated'),
								'logtiming' => $modx->getOption( $PKG_NAME_LOWER .'.logtiming_enabled'),
								'plugin-cache' => $modx->getOption( $PKG_NAME_LOWER .'.plugin-cache_enabled')
					);

	// Check if package is installed and activated
	$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
	if(!$modx->addPackage( $PKG_NAME_LOWER, $ldpath, $PKG_NAME_LOWER .'_') || !$activated['extra'] )
	{
		return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

	// Is LogTiming enabled?
	} elseif ($activated['logtiming']) {

		$id= $modx->resource->get('id');
		$parse_time= number_format(round(microtime(true) - $modx->startTime, 7), 7);
		$queries_time= number_format(round($modx->queryTime, 7), 7);

		$data = array(
			'id' => $id,
			'memory_peak' => floatval( memory_get_peak_usage(true) / 1048576 ),
			//'from_modx_cache' => $modx->sourceCache, //_cacheFlag
			'from_plugin_cache' => boolval( $activated['plugin-cache'] ),
			'total_queries' => intval( isset ($modx->executedQueries) ? $modx->executedQueries : 0 ),
			'total_queries_time' => floatval( $queries_time ),
			'total_parse_time' => floatval( $parse_time ),
			'total' => floatval( $parse_time + $queries_time )
		);

		$speedup_add = $modx->newObject('LogTimings', $data);
		$speedup_add->save();

	}
}

return('');