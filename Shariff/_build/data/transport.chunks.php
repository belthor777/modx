<?php
/**
 * @package ludwigshariff
 * @subpackage build
 */
$pkg = "ludwigshariff";
$chunks = array();

// ShariffInfo Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'shariffinfo',
    'description' => 'Output the latest share counts in http://schema.org/UserInteraction format',
    'snippet' => file_get_contents($sources['chunks'].'shariffinfo.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
