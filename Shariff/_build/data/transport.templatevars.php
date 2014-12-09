<?php
/**
 * @package ludwigshariff
 * @subpackage build
 */
$tvs = array();

$i= 0;
$tvs[$i] = $modx->newObject('modTemplateVar');
$tvs[$i]->fromArray(array(
    'name'              => PKG_NAME,
    'caption'           => 'Share counter',
    'description'       => 'Backend TV to show the total number of likes from several social media services',
    'type'              => 'text',
    'default_text'      => ''
));

return $tvs;
