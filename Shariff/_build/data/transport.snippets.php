<?php
/**
 * Description:  Array of snippet objects for LudwigShariff package
 * @package ludwigshariff
 * @subpackage build
 */
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
    'name' => 'shariff',
    'description' => 'Social share privacy buttons',
    'snippet' => getSnippetContent($sources['snippets'] . 'shariff.snippet.php'),
),'',true,true);

// Import Items
$i++;
$snippets[$i]= $modx->newObject('modSnippet');
$snippets[$i]->fromArray(array(
    'id' => $i,
    'name' => 'shariffinfo',
    'description' => 'Show Social Media Shares',
    'snippet' => getSnippetContent($sources['snippets'] . 'shariffinfo.snippet.php'),
),'',true,true);

return $snippets;

?>
