<?php
/**
 * @package ludwigmarkdown
 * @subpackage build
 */
$pkg = "ludwigmarkdown";
$chunks = array();

// Disqus Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'syntax_highlighter',
    'description' => 'LudwigMarkdown - Syntax Highlighter is used',
    'snippet' => file_get_contents($sources['chunks'].'syntax_highlighter.chunk.tpl'),
    'properties' => '',
),'',true,true);

// Disqus LazyLoad Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'no_syntax_highlighter',
    'description' => 'LudwigMarkdown - Syntax Highlighter is NOT used',
    'snippet' => file_get_contents($sources['chunks'].'no_syntax_highlighter.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
