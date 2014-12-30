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
$settings['ludwigmarkdown.use_syntaxhighlight']= $modx->newObject('modSystemSetting');
$settings['ludwigmarkdown.use_syntaxhighlight']->fromArray(array(
     'key' => 'ludwigmarkdown.use_syntaxhighlight',
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

// Use Table of Content
$settings['ludwigmarkdown.use_toc']= $modx->newObject('modSystemSetting');
$settings['ludwigmarkdown.use_toc']->fromArray(array(
     'key' => 'ludwigmarkdown.use_toc',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigmarkdown',
     'area' => 'general',
),'',true,true);

return $settings;
