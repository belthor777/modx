#!/usr/bin/php
<?php
/**
 * LudwigDisqus_CronJob
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigdisqus_cronjob is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigdisqus_cronjob is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigdisqus_cronjob; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * LudwigDisqus_CronJob
 *
 * Import Items from Disqus for SeoOptimization by using a cronjob
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @author Bob Ray (source from http://bobsguides.com/blog.html/2013/07/13/using-modx-outside-of-modx)
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigdisqus sourcecode
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License
 * version 2 or (at your option) any later version for Disqus-PHP API
 * @package ludwigdisqus
 */
$outsideModx = false;
$pkg = "ludwigdisqus";
$output= '';

/* Check for CLI mode */
if (PHP_SAPI != 'cli')
{
        exit(0);
}

/* Instantiate MODX if necessary */
if (!isset($modx)) {
    $outsideModx = true;

    /* Set path to MODX core directory */
    if (!defined('MODX_CORE_PATH')) {
        /* be sure this has a trailing slash */
        define('MODX_CORE_PATH', dirname(dirname(dirname(dirname(__FILE__)))).'/');
    }
    /* get the MODX class file */
    require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

    /* instantiate the $modx object */
    $modx = new modX();
    if ((!$modx) || (!$modx instanceof modX)) {
        echo 'Could not create MODX class';
    }
    /* initialize MODX and set current context */
    $modx->initialize('web');

    /* load the error handler */
    $modx->getService('error', 'error.modError', '', '');

    /* Set up logging */
    $modx->setLogLevel(xPDO::LOG_LEVEL_INFO);

    /* Set log target */
    $modx->setLogTarget('ECHO');

    // Is CronJob allowed?
    if ( $modx->getOption( $pkg .'.use_cronjob') && $modx->getOption( $pkg .'.activated') && $modx->getOption( $pkg .'.seofriendly') )
    {
                // Clear Cache
                $cm = $modx->getCacheManager();
                $cm->refresh();

                // Run Import Snippet - Cached Version
                $output = $modx->runSnippet( $pkg .'_import',array());

                exit($output);
    }
    exit(0);

}

echo 'This is an command line script for cronjobs';
exit(0);
