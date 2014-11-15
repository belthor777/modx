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
    'properties' => $modx->fromJSON('[{"name":"width","desc":"","xtype":"numberfield","options":[],"value":"100","lexicon":"","overridden":false,"desc_trans":"","area":"","area_trans":"","menu":null},{"name":"txt","desc":"","xtype":"textfield","options":[],"value":"QR Code","lexicon":"","overridden":false,"desc_trans":"","area":"","area_trans":"","menu":null}]'),
),'',true,true);

return $chunks;
