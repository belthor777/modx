<?php
/**
 * @package ludwigshariff
 * @subpackage build
 */
$settings = array();

$name= PKG_NAME_LOWER .'.activated';
$settings[$name]= $modx->newObject('modSystemSetting');
$settings[$name]->fromArray(array(
     'key' => $name,
     'value' => 1,
     'xtype' => 'combo-boolean',
     'namespace' => PKG_NAME_LOWER,
     'area' => 'general',
),'',true,true);

$name= PKG_NAME_LOWER .'.services';
$settings[$name]= $modx->newObject('modSystemSetting');
$settings[$name]->fromArray(array(
     'key' => $name,
     'value' => 'facebook,googleplus,twitter',
     'xtype' => 'textfield',
     'namespace' => PKG_NAME_LOWER,
     'area' => 'general',
),'',true,true);

$name= PKG_NAME_LOWER .'.external_domains';
$settings[$name]= $modx->newObject('modSystemSetting');
$settings[$name]->fromArray(array(
     'key' => $name,
     'value' => '',
     'xtype' => 'textfield',
     'namespace' => PKG_NAME_LOWER,
     'area' => 'general',
),'',true,true);

$name= PKG_NAME_LOWER .'.cache_expires';
$settings[$name]= $modx->newObject('modSystemSetting');
$settings[$name]->fromArray(array(
     'key' => $name,
     'value' => 3600,
     'xtype' => 'numberfield',
     'namespace' => PKG_NAME_LOWER,
     'area' => 'general',
),'',true,true);

$name= PKG_NAME_LOWER .'.version';
$settings[$name]= $modx->newObject('modSystemSetting');
$settings[$name]->fromArray(array(
     'key' => $name,
     'value' => PKG_VERSION,
     'xtype' => 'textfield',
     'namespace' => PKG_NAME_LOWER,
     'area' => 'general',
),'',true,true);

return $settings;
