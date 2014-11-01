<?php
/**
 * Description:  Array of snippet objects for LudwigPHPQRCODE package
 * @package ludwigphpqrcode
 * @subpackage build
 */
$pak = "ludwigphpqrcode";
$snippets = array();
if (!function_exists('getSnippetContent')) {
    function getSnippetContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}

// Import Items
$i= 0;
$snippets[$i]= $modx->newObject('modSnippet');
$snippets[$i]->fromArray(array(
    'id' => $i,
    'name' => $pak,
    'description' => 'Create QR Codes in Modx',
    'snippet' => getSnippetContent($sources['snippets'] . $pak .'.snippet.php'),
),'',true,true);

unset($properties);

return $snippets;

?>
