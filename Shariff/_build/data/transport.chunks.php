<?php
/**
 * @package ludwigshariff
 * @subpackage build
 */
$pkg = "ludwigshariff";
$chunks = array();

// Shariff Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'shariff',
    'description' => 'Social share privacy buttons',
    'snippet' => file_get_contents($sources['chunks'].'shariff.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
