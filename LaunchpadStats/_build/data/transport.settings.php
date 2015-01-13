<?php
/**
 *
 * @package ludwiglaunchpadstats
 * @subpackage build
 */
$settings = array();

// Activate Extra
$settings['ludwiglaunchpadstats.activated'] = $modx->newObject( 'modSystemSetting' );
$settings['ludwiglaunchpadstats.activated']->fromArray( array(
	'key' => 'ludwiglaunchpadstats.activated', 
	'value' => '1', 
	'xtype' => 'combo-boolean', 
	'namespace' => 'ludwiglaunchpadstats', 
	'area' => 'general'
), '', true, true );

return $settings;
