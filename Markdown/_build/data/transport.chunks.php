<?php
/**
 * @package ludwigmarkdown
 * @subpackage build
 */
$pkg = "ludwigmarkdown";
$chunks = array();

// Syntax Highlighter
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'syntax_highlighter',
    'description' => 'LudwigMarkdown - Syntax Highlighter is used',
    'snippet' => file_get_contents($sources['chunks'].'syntax_highlighter.chunk.tpl'),
    'properties' => '',
),'',true,true);

// Syntax Highlighter
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'no_syntax_highlighter',
    'description' => 'LudwigMarkdown - Syntax Highlighter is NOT used',
    'snippet' => file_get_contents($sources['chunks'].'no_syntax_highlighter.chunk.tpl'),
    'properties' => '',
),'',true,true);

// Markdown Syntax test
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'markdown_testpage',
    'description' => 'LudwigMarkdown - Test the Markdown syntax',
    'snippet' => file_get_contents($sources['chunks'].'markdown_testpage.chunk.tpl'),
    'properties' => '',
),'',true,true);

// Markdown-Extra Syntax test
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => 0,
    'name' => 'markdown-extra_testpage',
    'description' => 'LudwigMarkdown - Test the Markdown-Extra syntax',
    'snippet' => file_get_contents($sources['chunks'].'markdown-extra_testpage.chunk.tpl'),
    'properties' => '',
),'',true,true);


return $chunks;
