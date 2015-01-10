<?php
/**
 * Description:  Array of snippet objects for LudwigLaunchpadStats package
 * @package ludwiglaunchpadstats
 * @subpackage build
 */
define('PKG_NAME', 'LudwigLaunchpadStats');
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
    'name' => 'lls_plot_binary_stats',
    'description' => 'Using Google Graph to plot Launchpad PPA Download Stats',
    'snippet' => getSnippetContent($sources['snippets'] . 'lls_plot_binary_stats.snippet.php')
),'',true,true);

return $snippets;
?>
