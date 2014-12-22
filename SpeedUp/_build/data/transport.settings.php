<?php
/**
 * @package ludwigspeedup
 * @subpackage build
 */
$settings = array();

// Activate Extra
$settings['ludwigspeedup.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.activated']->fromArray(array(
     'key' => 'ludwigspeedup.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'general',
),'',true,true);

// Enable Plugin Static-Caching
$settings['ludwigspeedup.plugin-cache_enabled']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.plugin-cache_enabled']->fromArray(array(
     'key' => 'ludwigspeedup.plugin-cache_enabled',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'plugins',
),'',true,true);

// Log Timing for every ID
$settings['ludwigspeedup.logtiming_enabled']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.logtiming_enabled']->fromArray(array(
     'key' => 'ludwigspeedup.logtiming_enabled',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'logtiming',
),'',true,true);


return $settings;
