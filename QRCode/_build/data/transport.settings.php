<?php
/**
 * @package ludwigqrcode
 * @subpackage build
 */
$settings = array();

$settings['ludwigqrcode.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigqrcode.activated']->fromArray(array(
     'key' => 'ludwigqrcode.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigqrcode',
     'area' => 'general',
),'',true,true);

return $settings;
