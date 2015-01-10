<?php
/**
 * @package ludwiglaunchpadstats
 * @subpackage build
 */
$pkg = "ludwiglaunchpadstats";
$chunks = array();

// LogTiming Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'lls_plot_binary_stats',
    'description' => 'Plot Download Stats for a PPA',
    'snippet' => file_get_contents($sources['chunks'].'lls_plot_binary_stats.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
