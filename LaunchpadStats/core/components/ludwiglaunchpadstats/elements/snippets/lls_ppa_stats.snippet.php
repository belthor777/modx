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
	'category' => $modx->getOption( 'category', $props, 'http://schema.org/CommunicationApplication' ),
	'subcategory' => $modx->getOption( 'subcategory', $props, '' ),
	'show_graph' =>  $modx->getOption( 'show_graph', $props, false ),
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
	$dl_key= 'total_dl';


	// Load Class
	$lls = new LudwigLaunchpadStats( $modx );
	
	// Config Class
	$conf_ary = array(
		'ppa_user' => $val['ppa_user'], 
		'ppa_name' => $val['ppa_name'], 
		'binary_name' => $val['binary_name'], 
		'binary_status' => $val['binary_status'], 
		'get_dl_stats' => true, 
		'get_dl_daily_stats' => false,
		'use_googlegraph' => false	// We insert it directly into the chunk
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

			if ( ( $key !== $dl_key ) && ( $key !== 'web_link' ) )
			{
				// Does we need graph preparations?
				if ($val['show_graph'])
				{
					$data[] = '["' . $key . '",' . $value[$dl_key] . ', "' . $val['gcolor'] . '"]';
				}
				
				// Get Chunk for Software Information (version etc.) e.g. 7.3
				foreach( $value as $vkey => $vvalue )
				{
					if ( $vkey !== $dl_key )
					{

						// Delete Total_DL in Array
						$os_ary= array_keys( $vvalue );
						array_pop($os_ary);

						// Get Architectures
						$arch_ary= array();
						foreach( $vvalue as $akey => $avalue )
						{
							if ( $akey !== $dl_key )
							{
								$arch_ary= array_merge($arch_ary, array_keys($avalue));
							}
						}
						$arch_ary= array_unique( $arch_ary );
						if(($archkey = array_search($dl_key, $arch_ary)) !== false) {
    						unset($arch_ary[$archkey]);
						}


						$output .= $modx->getChunk( $val['schunk'], array(
							'title' => $val['ppa_name'],
							'binary_name' => $key, 
							'category' => $val['category'], 
							'subcategory' => $val['subcategory'], 
							'downloads' => $vvalue[$dl_key], 
							'version' => $vkey, 
							'os' => 'Ubuntu ' . ucwords( implode( ', Ubuntu ', $os_ary ) ), 
							'arch' => implode( ',', $arch_ary ),
							'webLink' => $lls->fields['web_link']
						) );
					}
				}
			}
		}

		if ($val['show_graph'])
		{
			// Post Graph Data
			$output .= $modx->getChunk( $val['gchunk'], array(
				'data' => implode( ",", $data ), 
				'idx' => 1, 
				'title' => $val['title'], 
				'htitle' => $val['htitle'], 
				'gtitle' => $val['gtitle'], 
				'width' => $val['width'], 
				'height' => $val['height'], 
				'total_downloads' => $lls->fields[$dl_key]
			) );
		}
	}
}

return ( $output );