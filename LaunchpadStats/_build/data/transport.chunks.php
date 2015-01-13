<?php
/**
 *
 * @package ludwiglaunchpadstats
 * @subpackage build
 */
$pkg = "ludwiglaunchpadstats";
$chunks = array();

// PPA - Plot Stats
$i = 0;
$chunks[$i] = $modx->newObject( 'modChunk' );
$chunks[$i]->fromArray( array(
	'id' => 0, 
	'name' => 'lls_plot_stats', 
	'description' => 'Plot Download Stats for a PPA', 
	'snippet' => file_get_contents( $sources['chunks'] . 'lls_plot_stats.chunk.tpl' ), 
	'properties' => ''
), '', true, true );

// PPA Software information
$i++;
$chunks[$i] = $modx->newObject( 'modChunk' );
$chunks[$i]->fromArray( array(
		'id' => 0,
		'name' => 'lls_ppa_info',
		'description' => 'Get Binary Name Informations',
		'snippet' => file_get_contents( $sources['chunks'] . 'lls_ppa_info.chunk.tpl' ),
		'properties' => ''
), '', true, true );

// PPA Software package details
$i++;
$chunks[$i] = $modx->newObject( 'modChunk' );
$chunks[$i]->fromArray( array(
		'id' => 0,
		'name' => 'lls_ppa_info_details',
		'description' => 'Get PPA package details',
		'snippet' => file_get_contents( $sources['chunks'] . 'lls_ppa_info_details.chunk.tpl' ),
		'properties' => ''
), '', true, true );

return $chunks;
