<?php
/**
 * @package ludwigqrcode
 * @subpackage build
 */
$pkg = "ludwigqrcode";
$chunks = array();

// LudwigQRcode Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode',
    'description' => 'Generate QR-Codes',
    'snippet' => file_get_contents($sources['chunks'].'qrcode.chunk.tpl'),
    'properties' => "",
),'',true,true);

return $chunks;
