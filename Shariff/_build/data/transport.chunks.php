<?php
/**
 * @package ludwigdisqus
 * @subpackage build
 */
$pkg = "ludwigdisqus";
$chunks = array();

// Disqus Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'disqus',
    'description' => 'Disqus comments on your website',
    'snippet' => file_get_contents($sources['chunks'].'disqus.chunk.tpl'),
    'properties' => '',
),'',true,true);

// Disqus LazyLoad Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'disqus_lazyload',
    'description' => 'Disqus comments on your website: Load Disqus comments when visitor scrolls down.',
    'snippet' => file_get_contents($sources['chunks'].'disqus_lazyload.chunk.tpl'),
    'properties' => '',
),'',true,true);


// Disqus comments
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => $pkg .'_seofriendly',
    'description' => 'Show some Search Engine Optimized Disqus information/comments',
    'snippet' => file_get_contents($sources['chunks'] . $pkg .'_seofriendly.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
