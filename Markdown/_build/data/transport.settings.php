<?php
/**
 * @package ludwigmarkdown
 * @subpackage build
 */
$settings = array();

// Activate Extra
$settings['ludwigmarkdown.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigmarkdown.activated']->fromArray(array(
     'key' => 'ludwigmarkdown.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigmarkdown',
     'area' => 'general',
),'',true,true);

// Use Geshi?
$settings['ludwigmarkdown.syntaxhighlight_enabled']= $modx->newObject('modSystemSetting');
$settings['ludwigmarkdown.syntaxhighlight_enabled']->fromArray(array(
     'key' => 'ludwigmarkdown.syntaxhighlight_enabled',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigmarkdown',
     'area' => 'general',
),'',true,true);

// Use Pandoc?
$settings['ludwigmarkdown.use_pandoc']= $modx->newObject('modSystemSetting');
$settings['ludwigmarkdown.use_pandoc']->fromArray(array(
     'key' => 'ludwigmarkdown.use_pandoc',
     'value' => '0',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigmarkdown',
     'area' => 'general',
),'',true,true);


return $settings;
