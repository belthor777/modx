<?php
/**
 * @package ludwigspeedup
 * @subpackage build
 */
$pkg = "ludwigspeedup";
$chunks = array();

// LogTiming Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'logtiming_charts',
    'description' => 'Show Modx Speed',
    'snippet' => file_get_contents($sources['chunks'].'logtiming_charts.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
