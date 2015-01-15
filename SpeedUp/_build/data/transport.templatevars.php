<?php
/**
 * @package ludwigspeedup
 * @subpackage build
 */
define('PKG_NAME', 'LudwigSpeedUp');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));
$tvs = array();

$i= 0;
$tvs[$i] = $modx->newObject('modTemplateVar');
$tvs[$i]->fromArray(array(
    'name'              => PKG_NAME_LOWER,
    'caption'           => PKG_NAME,
    'description'       => 'Used for caching',
    'type'              => 'text',
    'elements'          => '',
    'default_text'      => '',
    'input_properties'   => array(),
    'output_properties' => array(),
    'rank'              => 20
));

return $tvs;
