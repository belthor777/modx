<?php
/**
 * Description:  Array of snippet objects for LudwigDisqus package
 * @package ludwigdisqus
 * @subpackage build
 */
$pak = "ludwigdisqus";
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
    'name' => $pak .'_import',
    'description' => 'Import Items from Disqus for SEO',
    'snippet' => getSnippetContent($sources['snippets'] . $pak .'_import.snippet.php'),
),'',true,true);

// Show SEO-Friendly Items
$i++;
$snippets[$i]= $modx->newObject('modSnippet');
$snippets[$i]->fromArray(array(
    'id' => $i,
    'name' => $pak .'_seofriendly',
    'description' => 'Optimize Disqus Comments for Search Engines',
    'snippet' => getSnippetContent($sources['snippets'] . $pak .'_seofriendly.snippet.php'),
),'',true,true);

unset($properties);

return $snippets;

?>
