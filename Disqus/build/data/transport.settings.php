<?php
/**
 * @package ludwigdisqus
 * @subpackage build
 */
$settings = array();

$settings['ludwigdisqus.activated']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.activated']->fromArray(array(
     'key' => 'ludwigdisqus.activated',
     'value' => '1',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigdisqus',
     'area' => 'general',
),'',true,true);

$settings['ludwigdisqus.seofriendly']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.seofriendly']->fromArray(array(
     'key' => 'ludwigdisqus.seofriendly',
     'value' => '0',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigdisqus',
     'area' => 'seofriendly',
),'',true,true);

$settings['ludwigdisqus.version']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.version']->fromArray(array(
     'key' => 'ludwigdisqus.version',
     'value' => PKG_VERSION,
     'xtype' => 'textfield',
     'namespace' => 'ludwigdisqus',
     'area' => 'general',
),'',true,true);

$settings['ludwigdisqus.shortname']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.shortname']->fromArray(array(
     'key' => 'ludwigdisqus.shortname',
     'value' => 'myshortname',
     'xtype' => 'textfield',
     'namespace' => 'ludwigdisqus',
     'area' => 'general',
),'',true,true);

$settings['ludwigdisqus.api_key']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.api_key']->fromArray(array(
     'key' => 'ludwigdisqus.api_key',
     'value' => 'Enter your Disqus API Key',
     'xtype' => 'textfield',
     'namespace' => 'ludwigdisqus',
     'area' => 'seofriendly',
),'',true,true);

$settings['ludwigdisqus.fetch_limit']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.fetch_limit']->fromArray(array(
     'key' => 'ludwigdisqus.fetch_limit',
     'value' => 100,
     'xtype' => 'numberfield',
     'namespace' => 'ludwigdisqus',
     'area' => 'seofriendly',
),'',true,true);

$settings['ludwigdisqus.force_db_rebuild']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.force_db_rebuild']->fromArray(array(
     'key' => 'ludwigdisqus.force_db_rebuild',
     'value' => '0',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigdisqus',
     'area' => 'seofriendly',
),'',true,true);

$settings['ludwigdisqus.use_cronjob']= $modx->newObject('modSystemSetting');
$settings['ludwigdisqus.use_cronjob']->fromArray(array(
     'key' => 'ludwigdisqus.use_cronjob',
     'value' => '0',
     'xtype' => 'combo-boolean',
     'namespace' => 'ludwigdisqus',
     'area' => 'seofriendly',
),'',true,true);

return $settings;
