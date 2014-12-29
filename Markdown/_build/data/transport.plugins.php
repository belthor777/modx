<?php
/**
 * Description:  Array of plugin objects for LudwigMarkdown package
 * @package ludwigmarkdown
 * @subpackage build
 */
define('PKG_NAME', 'LudwigMarkdown');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

$plugins = array();
$events = array();
if (!function_exists('getSnippetContent')) {
    function getSnippetContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}

// Convert Markdown content to HTML5
$i= 0;
$plugins[$i]= $modx->newObject('modPlugin');
$plugins[$i]->fromArray(array(
	'id' => $i,
	'name' => PKG_NAME,
	'description' => 'Convert Markdown to HTML5',
	'plugincode' => getSnippetContent($sources['plugins'] . PKG_NAME_LOWER . '.plugins.php'),
	'category' => 0
),'',true,true);

// Add Events for Plugin
$events[0]= $modx->newObject('modPluginEvent');
$events[0]->fromArray(array(
	'event' => 'OnLoadWebDocument',
	'priority' => 0,
	'propertyset' => 0
),'',true,true);
$plugins[$i]->addMany($events);
$modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events for '. PKG_NAME .'.'); flush();
unset($events);



return $plugins;
?>
