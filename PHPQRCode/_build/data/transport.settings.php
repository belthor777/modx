<?php
/**
 * @package ludwigphpqrcode
 * @subpackage build
 */
$settings = array();

$settings['ludwigphpqrcode.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigphpqrcode.activated']->fromArray(array(
     'key' => 'ludwigphpqrcode.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigphpqrcode',
     'area' => 'general',
),'',true,true);

return $settings;
