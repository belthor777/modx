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


$settings['ludwigqrcode.beercode']= $modx->newObject('modSystemSetting');
$settings['ludwigqrcode.beercode']->fromArray(array(
     'key' => 'ludwigqrcode.beercode',
     'value' => 'Insert the code here',
     'xtype' => 'textfield',
     'namespace' => 'ludwigqrcode',
     'area' => 'general',
),'',true,true);

return $settings;
