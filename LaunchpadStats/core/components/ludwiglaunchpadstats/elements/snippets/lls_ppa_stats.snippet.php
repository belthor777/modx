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
 *          version 2 or (at your option) any later version for ludwiglaunchpadstats sourcecode
 * @package ludwiglaunchpadstats
 *         
 */
$PKG_NAME = 'LudwigLaunchpadStats';
$PKG_NAME_LOWER = strtolower( $PKG_NAME );

// Variables
$props = & $scriptProperties;
$output = '';

// Initial Default Parameter
$val = array(
	'gchunk' => $modx->getOption( 'gchunk', $props, 'lls_plot_stats' ),  // Set Graph Chunk name
	'schunk' => $modx->getOption( 'schunk', $props, 'lls_ppa_info' ),  // Set Software Chunk name
	'dchunk' => $modx->getOption( 'dchunk', $props, 'lls_ppa_info_details' ),  // Set Software Chunk Details
	'ppa_user' => $modx->getOption( 'user', $props, '' ),  // PPA Username
	'ppa_name' => $modx->getOption( 'ppa', $props, '' ),  // PPA Name
	'binary_name' => $modx->getOption( 'bname', $props, '' ),  // Binary Name Filter
	'binary_status' => $modx->getOption( 'bstas', $props, 'Published' ),  // Binary Status Filter
	'title' => $modx->getOption( 'title', $props, $PKG_NAME ),  // Title of Graph
	'htitle' => $modx->getOption( 'htitle', $props, 'Set htitle' ),  // Title for Mouse Hover Effect
	'gtitle' => $modx->getOption( 'gtitle', $props, 'Set gtitle' ),  // Title for Graph Figure
	'gcolor' => $modx->getOption( 'gcolor', $props, '#BC5679;' ),  // Graph color
	'height' => $modx->getOption( 'height', $props, 400 ),  // In Pixel: Graph Height
	'width' => $modx->getOption( 'width', $props, 600 ), 
	'category' => $modx->getOption( 'category', $props, 'http://schema.org/CommunicationApplication' )
); // In Pixel: Graph Width
   
// Get System Setting Options for activation
$activated = $modx->getOption( $PKG_NAME_LOWER . '.activated', null, false, true );

// Check if package is installed and activated
$ldpath = MODX_CORE_PATH . 'components/' . $PKG_NAME_LOWER . '/model/';
if ( !$modx->loadClass( $PKG_NAME, $ldpath, true, true ) || !$activated )
{
	return ( 'There was a problem adding the ' . $PKG_NAME . ' package!  Check the logs for more info!' );
} else
{
	
	// Load Class
	$lls = new LudwigLaunchpadStats( $modx );
	
	// Config Class
	$conf_ary = array(
		'ppa_user' => $val['ppa_user'], 
		'ppa_name' => $val['ppa_name'], 
		'binary_name' => $val['binary_name'], 
		'binary_status' => $val['binary_status'], 
		'get_dl_stats' => true, 
		'get_dl_daily_stats' => false
	);
	$lls->config( $conf_ary );
	
	// Get Data
	$lls->get_ppa_data();
	
	// Plot Results
	if ( is_array( $lls->fields ) && ( count( $lls->fields ) > 0 ) )
	{
		
		// Package information e.g. twonkyserver
		$data = array();
		foreach( $lls->fields as $key => $value )
		{
			if ( ( $key !== 'total_dl' ) && ( $key !== 'web_link' ) )
			{
				$data[] = '["' . $key . '",' . $value['total_dl'] . ', ' . $val['gcolor'] . ']';
				
				// Get Chunk for Software Information (version etc.) e.g. 7.3
				foreach( $value as $vkey => $vvalue )
				{
					if ( $vkey !== 'total_dl' )
					{
						
						// Distribution informations e.g. 14.10
						$details = '';
						foreach( $vvalue as $dkey => $dvalue )
						{
							if ( $dkey !== 'total_dl' )
							{
								
								// Distribution informations e.g. 14.10
								foreach( $dvalue as $akey => $avalue )
								{
									if ( $akey !== 'total_dl' )
									{
										
										// Source information
										$details .= $modx->getChunk( $val['dchunk'], array(
											'datePublished' => date( 'Y-m-d', $avalue['date_published'] ), 
											'dateCreated' => date( 'Y-m-d', $avalue['date_created'] ), 
											'display_name' => $advalue['display_name'], 
											'os' => 'Ubuntu ' . $akey, 
											'version' => $dkey, 
											'downloadUrl' => ''
										) );
									}
								}
							}
						}
						
						$output .= $modx->getChunk( $val['schunk'], array(
							'binary_name' => $key, 
							'category' => $val['category'], 
							'downloads' => $vvalue['total_dl'], 
							'version' => $vkey, 
							'os' => 'Ubuntu ' . implode( ', Ubuntu ', array_keys( $vvalue ) ), 
							'webLink' => $lls->fields['web_link'], 
							
							// Source information
							'package_details' => $details
						) );
					}
				}
			}
		}
		
		// Post Graph Data
		$output .= $modx->getChunk( $val['gchunk'], array(
			'data' => implode( ",", $data ), 
			'idx' => 1, 
			'title' => $val['title'], 
			'htitle' => $val['htitle'], 
			'gtitle' => $val['gtitle'], 
			'width' => $val['width'], 
			'height' => $val['height'], 
			'total_downloads' => $lls->fields['total_dl']
		) );
	}
}

return ( $output );