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
    'description' => 'Generates a QR-Code Link to your webpage: [[$qrcode_url &link=`https://ludwig.im`]] or [[$qrcode_url]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_url.chunk.tpl'),
    'properties' => '',
),'',true,true);

// LudwigQRcode Text Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode_text',
    'description' => 'Generates a QR-Code with your text: [[$qrcode_text? &text=`Hello World`]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_text.chunk.tpl'),
    'properties' => '',
),'',true,true);

// LudwigQRcode Phone Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode_phone',
    'description' => 'Generates a QR-Code with your Phone number: [[$qrcode_phone? &num=`+49 171 5555555`]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_phone.chunk.tpl'),
    'properties' => '',
),'',true,true);

// LudwigQRcode SMS Chunk
$i++;
$chunks[$i]= $modx->newObject('modChunk');
$chunks[$i]->fromArray(array(
    'id' => $i,
    'name' => 'qrcode_sms',
    'description' => 'Generates a QR-Code to send an SMS: [[$qrcode_sms? &num=`+49 171 5555555` &text=`Hello this is a test text message`]]',
    'snippet' => file_get_contents($sources['chunks'].'qrcode_sms.chunk.tpl'),
    'properties' => '',
),'',true,true);

return $chunks;
