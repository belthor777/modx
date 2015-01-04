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

// Collect Assets
///////////////////////////////////////////////////////////////////////////////////////

// Use CollectAssets Plugin?
$settings['ludwigspeedup.use_collectassets']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.use_collectassets']->fromArray(array(
     'key' => 'ludwigspeedup.use_collectassets',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

// How depth we have to look to find js and css resources?
$settings['ludwigspeedup.collectassets.depth']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.collectassets.depth']->fromArray(array(
     'key' => 'ludwigspeedup.collectassets.depth',
     'value' => 2,
     'xtype' => 'numberfield',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

// How many ms should we cache js and css files?
$settings['ludwigspeedup.collectassets.cache_expires']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.collectassets.cache_expires']->fromArray(array(
     'key' => 'ludwigspeedup.collectassets.cache_expires',
     'value' => 3600,
     'xtype' => 'numberfield',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

// Minify HTML
$settings['ludwigspeedup.collectassets.minify_html']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.collectassets.minify_html']->fromArray(array(
     'key' => 'ludwigspeedup.collectassets.minify_html',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

// Minify CSS
$settings['ludwigspeedup.collectassets.minify_css']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.collectassets.minify_css']->fromArray(array(
     'key' => 'ludwigspeedup.collectassets.minify_css',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

// Minify JS
$settings['ludwigspeedup.collectassets.minify_js']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.collectassets.minify_js']->fromArray(array(
     'key' => 'ludwigspeedup.collectassets.minify_js',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'CollectAssets',
),'',true,true);

return $settings;
