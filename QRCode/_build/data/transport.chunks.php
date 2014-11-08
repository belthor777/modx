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
    'id' => 0,
    'name' => 'qrcode_url',
    'description' => 'QR-Code for your site',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_url.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
