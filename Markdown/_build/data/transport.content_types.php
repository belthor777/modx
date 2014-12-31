<?php
/**
 * @package ludwigmarkdown
 * @subpackage build
 */
$contenttype = array();

// Source: https://code.google.com/p/modx-revo-ja/source/browse/trunk/_build/data/transport.core.content_types.php?spec=svn30&r=30
$contenttype['markdown']= $modx->newObject('modContentType');
$contenttype['markdown']->fromArray(array (
  'id' => 20,
  'name' => 'Markdown',
  'description' => 'Markdown content',
  'mime_type' => 'text/x-markdown',
  'file_extensions' => '.md',
  'headers' => 'NULL',
  'binary' => 0,
), '', true, true);

return $contenttype;
