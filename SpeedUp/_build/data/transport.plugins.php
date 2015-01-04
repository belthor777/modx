<?php
/**
 * Description:  Array of plugin objects for LudwigSpeedUp package
 * @package ludwigspeedup
 * @subpackage build
 */
define('PKG_NAME', 'LudwigSpeedUP');
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

// Save Timings to Database
//////////////////////////////////////////////////////////////////////////////////////////////////////////
$i= 0;
$plugins[$i]= $modx->newObject('modPlugin');
$plugins[$i]->fromArray(array(
	'id' => $i,
	'name' => 'LogTimings',
	'description' => 'Log Timings in Modx',
	'plugincode' => getSnippetContent($sources['plugins'] . 'logtimings.plugins.php'),
	'category' => 0
),'',true,true);
// Add Events for Plugin
$events[0]= $modx->newObject('modPluginEvent');
$events[0]->fromArray(array( 'event' => 'OnWebPageComplete', 'priority' => 0, 'propertyset' => 0 ),'',true,true);
$plugins[$i]->addMany($events);
$modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events for LogTimings.'); flush();
unset($events);


// Collect Assets
//////////////////////////////////////////////////////////////////////////////////////////////////////////
$i++;
$plugins[$i]= $modx->newObject('modPlugin');
$plugins[$i]->fromArray(array(
	'id' => $i,
	'name' => 'CollectAssets',
	'description' => 'Get JS and CSS content, that should be published',
	'plugincode' => getSnippetContent($sources['plugins'] . 'collectassets.plugins.php'),
	'category' => 0
),'',true,true);
// Add Events for Collect Assets Plugin
$events[0]= $modx->newObject('modPluginEvent');
$events[1]= $modx->newObject('modPluginEvent');
$events[0]->fromArray(array( 'event' => 'OnLoadWebDocument', 'priority' => 0, 'propertyset' => 0),'',true,true);
$events[0]->fromArray(array( 'event' => 'OnWebPagePrerender', 'priority' => 0, 'propertyset' => 0),'',true,true);
$plugins[$i]->addMany($events);
$modx->log(xPDO::LOG_LEVEL_INFO,'Packaged in '.count($events).' Plugin Events for CollectAssets.'); flush();
unset($events);

return $plugins;
?>
