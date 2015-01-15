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
$PKG_NAME= 'LudwigSpeedUp';
$PKG_NAME_LOWER= strtolower($PKG_NAME);

/**
 * Get amount of System Cores
 * @see http://icesquare.com/wordpress/phphow-to-get-the-number-of-cpu-cores-in-fedora-ubuntu-and-freebsd/
 */
function getSystemCores()
{
	$cmd = "uname";
	switch( strtolower(trim(shell_exec($cmd))) )
	{
		case('linux'):
			$cmd = "cat /proc/cpuinfo | grep processor | wc -l";
			break;
		case('freebsd'):
			$cmd = "sysctl -a | grep 'hw.ncpu' | cut -d ':' -f2";
			break;
		default:
			unset($cmd);
	}

	if ($cmd != '')
	{
		$cpuCoreNo = intval(trim(shell_exec($cmd)));
	}
	return empty($cpuCoreNo) ? 1 : $cpuCoreNo;
}

/**
 * Calculates the processor load in %
 * @see sys_getloadavg
 * @author Ivan Gospodinow
 * @site ivangospodinow.com
 * @date 07.02.2013
 * @param int $coreCount
 * @param int $interval
 * @return float
 */
function systemLoadInPercent($interval = 1)
{
	$rs = sys_getloadavg();
	return round(($rs[$interval >= 1 && 3 <= $interval ? $interval : 1] * 100) / getSystemCores(),2);
}

// Get MODX timings
function getTimings()
{
	global $modx;

	$mtime= microtime();
	$mtime= explode(" ", $mtime);
	$mtime= $mtime[1] + $mtime[0];

	// Define Output Array
	$timings= array(	'queries' => ( isset( $modx->executedQueries ) ? $modx->executedQueries : 0 ),
							'queryTime' => $modx->queryTime,
							'totalTime' => ($mtime - $modx->startTime),
							'phpTime' => 0,
							'cached' => boolval( $modx->resourceGenerated ? false : true ),
							'php_memory' => (memory_get_peak_usage(true) / 1048576) ); // [Mb]
	$timings['phpTime']= $timings['totalTime'] - $timings['queryTime'];

	return( $timings );
}

$e = &$modx->Event;
if ($e->name == 'OnWebPageComplete')
{
	// Check if the Extra as well as LogTiming is enabled
	$activated = array(	'extra' => $modx->getOption( $PKG_NAME_LOWER .'.activated'),
								'logtiming' => $modx->getOption( $PKG_NAME_LOWER .'.logtiming_enabled')
					);

	// Check if package is installed and activated
	$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
	if(!$modx->addPackage( $PKG_NAME_LOWER, $ldpath, $PKG_NAME_LOWER .'_') || !$activated['extra'] )
	{
		return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

	// Is LogTiming enabled?
	} elseif ($activated['logtiming']) {

		$timings= getTimings();
		$id= $modx->resource->get('id');

		$data = array(
			'docid' => $id,
			'memory_modx' => $timings['php_memory'],
			'from_modx_cache' => $timings['cached'],
			'from_plugin_cache' => boolval( defined('LUDWIGSPEEDUP_CACHE_STAT') ? LUDWIGSPEEDUP_CACHE_STAT : false ),
			'queries' => $timings['queries'],
			'queries_time' => $timings['queryTime'], // [s]
			'parse_time' => $timings['phpTime'],	// [s]
			'total_time' => $timings['totalTime'],
			'system_load' => systemLoadInPercent() ); // System Load [%]

		$speedup_add = $modx->newObject('LogTimings', $data);
		$speedup_add->save();

	}
}

return('');