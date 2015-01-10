<?php
/**
 * ludwiglaunchpadstats_plot_binary_stats
 * Copyright 2015 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwiglaunchpadstats_plot_binary_stats is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwiglaunchpadstats_plot_binary_stats is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwiglaunchpadstats_plot_binary_stats; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwiglaunchpadstats
 */
/**
 * ludwiglaunchpadstats_plot_binary_stats
 *
 * Plot Launchpad Stats by using Google Charts
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwiglaunchpadstats sourcecode
 * @package ludwiglaunchpadstats
 **/
$PKG_NAME= 'LudwigLaunchpadStats';
$PKG_NAME_LOWER= strtolower($PKG_NAME);

// Variables
$props =& $scriptProperties;
$output= '';

// Initial Default Parameter
$val= array(	'chunk' => $modx->getOption('chunk', $props, 'lls_plot_binary_stats'),	// Set Chunk name
		'ppa_user' => $modx->getOption('user', $props, ''),			// PPA Username
		'ppa_name' => $modx->getOption('ppa', $props, ''),			// PPA Name
		'binary_name' => $modx->getOption('bname', $props, ''),			// Binary Name Filter
		'binary_status' => $modx->getOption('bstas', $props, 'Published'),	// Binary Status Filter
		'title' => $modx->getOption('title', $props, $PKG_NAME),		// Title of Graph
		'title_hover' => $modx->getOption('htitle', $props, 'Demo'),		// Title for Mouse Hover Effect
		'graph_title' => $modx->getOption('gtitle', $props, ''),		// Title for Graph Figure
		'height' => $modx->getOption('height', $props, 400),			// In Pixel: Graph Height
		'width' => $modx->getOption('width', $props, 600)			// In Pixel: Graph Width
);

// Get System Setting Options for activation
$activated = $modx->getOption( $PKG_NAME_LOWER .'.activated', null, false, true );

// Check if package is installed and activated
$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
if(!$modx->loadClass($PKG_NAME, $ldpath, true, true) || !$activated )
{
	return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

} else {

	// Load Class
	$lls = new LudwigLaunchpadStats( $modx );

	// Config Class
	$lls->config= array(	'ppa_user' => $val['ppa_user'],
				'ppa_name' => $val['ppa_name'],
				'binary_name' => $val['binary_name'],
				'binary_status' => $val['binary_status'],
				'get_dl_stats' => true,
				'get_dl_daily_stats' => false );

	// Get Data
	$lls->get_ppa_data();

	// Plot Results
	$data= array();
	foreach( $lls->fields as $key => $val) 
	{
		if ( $key !== 'total_dl' )
		{
			$data[]= '["'. $key .'",'. $val['total_dl'] .', "#BC5679;"]';
		}
	}

	$output= $modx->getChunk($chunk, array(
		'data' => implode( ",", $data ),
		'idx' => 1,
		'title' => $val['title'],
		'htitle' => $val['htitle'],
		'gtitle' => $val['gtitle'],
		'width' => $val['width'],
		'height' => $val['height']
	));
}

return( $output );