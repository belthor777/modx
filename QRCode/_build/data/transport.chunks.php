<?php
/**
 * @package ludwigqrcode
 * @subpackage build
 */
$pkg = "ludwigqrcode";
$chunks = array();

// LudwigQRcode URL Chunk
$i = 0;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode_url',
    'description' => 'Generates a QR-Code Link to your webpage: use [[$qrcode_url]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_url.chunk.tpl'),
    'properties' => '',
),'',true,true);

// LudwigQRcode Image Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode_img',
    'description' => 'Generates a QR-Code with your text: [[$qrcode_img? &text=`Hello World` &width=`80`]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_img.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
