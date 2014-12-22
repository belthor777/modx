<?php
/**
 * Description:  Array of snippet objects for LudwigSpeedUp package
 * @package ludwigspeedup
 * @subpackage build
 */
define('PKG_NAME', 'LudwigSpeedUP');
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

// Optimize CSS and JS
$i++;
$snippets[$i]= $modx->newObject('modSnippet');
$snippets[$i]->fromArray(array(
    'id' => $i,
    'name' => 'ludwigspeedup_header',
    'description' => 'Prepare CSS and JS files',
    'snippet' => getSnippetContent($sources['snippets'] . 'ludwigspeedup_header.snippet.php')
),'',true,true);

return $snippets;
?>