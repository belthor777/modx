<?php
/**
 * LudwigShariff
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigShariff is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * LudwigShariff is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigShariff; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigshariff
 */
/**
 * Build Schema script
 *
 * @package ludwigshariff
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(" ", $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* load modx and configs */
require_once dirname(__FILE__) . '/build.config.php';

/* define sources */
$sources = array(
    'model' => MODX_ADDON_PATH .'core/components/'.PKG_NAME_LOWER.'/model/',
    'schema_file' => MODX_ADDON_PATH .'core/components/'.PKG_NAME_LOWER.'/schema/'.PKG_NAME_LOWER.'.mysql.schema.xml',
);

/* remove old generated schema model */
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
        if ('.' === $file || '..' === $file) continue;
        if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
        else unlink("$dir/$file");
    }
    rmdir($dir);
}
if (is_dir( $sources['model'] . PKG_NAME_LOWER )) {
    rmdir_recursive( $sources['model'] . PKG_NAME_LOWER );
}

/* load modx and configs */
include_once MODX_CORE_PATH . 'model/modx/modx.class.php';
$modx= new modX();
$modx->initialize('mgr');
$modx->loadClass('transport.modPackageBuilder','',false, true);
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

$manager= $modx->getManager();
$generator= $manager->getGenerator();

$generator->classTemplate= <<<EOD
<?php
/**
 * [+phpdoc-package+]
 */
class [+class+] extends [+extends+] {}
?>
EOD;
$generator->platformTemplate= <<<EOD
<?php
/**
 * [+phpdoc-package+]
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\\\', '/') . '/[+class-lowercase+].class.php');
class [+class+]_[+platform+] extends [+class+] {}
?>
EOD;
$generator->mapHeader= <<<EOD
<?php
/**
 * [+phpdoc-package+]
 */
EOD;

if (!is_dir($sources['model'])) { $modx->log(modX::LOG_LEVEL_ERROR,'Model directory not found!'); die(); }
if (!file_exists($sources['schema_file'])) { $modx->log(modX::LOG_LEVEL_ERROR,'Schema file not found!'); die(); }
$generator->parseSchema( $sources['schema_file'], $sources['model'] );

// Create Tables
//$modx->addPackage( PKG_NAME_LOWER, $sources['model'], 'disqus_');
//$manager->createObjectContainer('Comment'); // created the database table
//$manager->createObjectContainer('Thread'); // created the database table

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

echo "\nExecution time: {$totalTime}\n";

exit ();
