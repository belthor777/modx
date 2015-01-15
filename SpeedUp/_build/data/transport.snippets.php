<?php
/**
 * Description:  Array of snippet objects for LudwigSpeedUp package
 * @package ludwigspeedup
 * @subpackage build
 */
define('PKG_NAME', 'LudwigSpeedUp');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

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

// Show Timings
$i= 0;
$snippets[$i]= $modx->newObject('modSnippet');
$snippets[$i]->fromArray(array(
    'id' => $i,
    'name' => 'logtiming_charts',
    'description' => 'Using Google Graph to visualize MODX Load',
    'snippet' => getSnippetContent($sources['snippets'] . 'logtiming_charts.snippet.php')
),'',true,true);

return $snippets;
?>
