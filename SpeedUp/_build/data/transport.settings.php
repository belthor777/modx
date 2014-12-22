<?php
/**
 * @package ludwigspeedup
 * @subpackage build
 */
$settings = array();

$settings['ludwigspeedup.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigspeedup.activated']->fromArray(array(
     'key' => 'ludwigspeedup.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigspeedup',
     'area' => 'general',
),'',true,true);

return $settings;
