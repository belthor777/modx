<?php
/**
 * LudwigDisqus
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigDisqus is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * LudwigDisqus is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigDisqus; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * LudwigDisqus build script
 *
 * @package ludwigdisqus
 * @subpackage build
 */
$mtime = microtime();
$mtime = explode(' ', $mtime);
$mtime = $mtime[1] + $mtime[0];
$tstart = $mtime;
set_time_limit(0);

/* load modx and configs */
require_once dirname(__FILE__) . '/build.config.php';

/* define sources */
$root = MODX_ADDON_PATH . PKG_NAME_LOWER .'/';
$build = MODX_ADDON_PATH .'_build/';
$sources = array(
	'root' => $root,
	'build' => $build,
	'data' => $build . 'data/',
	'events' => $build . 'data/events/',
	'resolvers' => $build . 'resolvers/',
	'properties' => $build . 'data/properties/',
	'permissions' => $build . 'data/permissions/',
	'chunks' => $root .'elements/chunks/',
	'snippets' => $root .'elements/snippets/',
	'plugins' => $root .'elements/plugins/',
	'lexicon' => $root .'lexicon/',
	'docs' => $root .'docs/',
	'pages' => $root .'elements/pages/',
	'templates' => $root .'elements/templates/',
	'source_assets' => $root .'elements/assets/',
	'source_core' => $root . 'elements/core/',
);
unset($root);
unset($build);

/* override with your own defines here (see build.config.sample.php) */
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once $sources['build'] . '/includes/functions.php';

$modx= new modX();
$modx->initialize('mgr');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');

$modx->loadClass('transport.modPackageBuilder','',false, true);
$builder = new modPackageBuilder($modx);
$builder->createPackage(PKG_NAME_LOWER,PKG_VERSION,PKG_RELEASE);
$builder->registerNamespace(PKG_NAME_LOWER,false,true,'{core_path}components/'.PKG_NAME_LOWER.'/');
$modx->log(modX::LOG_LEVEL_INFO,'Created Transport Package and Namespace.');

/* create category */
$category= $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category',PKG_NAME);
$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in category.');
flush();

/* add snippets */
if(file_exists($sources['data'] . 'transport.snippets.php'))
{
	$snippets = include $sources['data'] . 'transport.snippets.php';
	if (is_array($snippets)) {
		$category->addMany($snippets, 'Snippets');
	} else {
		$snippets = array();
		$modx->log(modX::LOG_LEVEL_ERROR, 'No snippets defined.');
	}
	$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in ' . count($snippets) . ' snippets.');
	flush();
	unset($snippets);
}

/* add chunks */
if(file_exists($sources['data'] . 'transport.chunks.php'))
{
	$chunks = include $sources['data'] . 'transport.chunks.php';
	if (is_array($chunks)) {
		$category->addMany($chunks, 'Chunks');
	} else {
		$chunks = array();
		$modx->log(modX::LOG_LEVEL_ERROR, 'No chunks defined.');
	}
	$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in ' . count($chunks) . ' chunks.');
	flush();
	unset($chunks);
}

/* add template variables */
if(file_exists($sources['data'] . 'transport.templatevars.php'))
{
	$tvs = include $sources['data'] . 'transport.templatevars.php';
	if (is_array($tvs)) {
	        $category->addMany($tvs, 'Template Variables');
	} else {
	        $tvs = array();
	        $modx->log(modX::LOG_LEVEL_ERROR, 'No tvs defined.');
	}
	$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in ' . count($tvs) . ' template variables.');
	flush();
	unset($tvs);
}

/* add plugins */
if(file_exists($sources['data'] . 'transport.plugins.php'))
{
	$plugins = include $sources['data'] . 'transport.plugins.php';
	if (is_array($plugins)) {
		$category->addMany($plugins, 'Plugins');
	} else {
		$plugins = array();
		$modx->log(modX::LOG_LEVEL_ERROR, 'No plugins defined.');
	}
	$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in ' . count($plugins) . ' plugins.');
	flush();
	unset($plugins);
}

/* create category vehicle */
$attr = array(
    xPDOTransport::UNIQUE_KEY => 'category',
    xPDOTransport::PRESERVE_KEYS => false,
    xPDOTransport::UPDATE_OBJECT => true,
    xPDOTransport::RELATED_OBJECTS => true,
    xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'Children' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'category',
            xPDOTransport::RELATED_OBJECTS => true,
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                'Snippets' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
                'Chunks' => array(
                    xPDOTransport::PRESERVE_KEYS => false,
                    xPDOTransport::UPDATE_OBJECT => true,
                    xPDOTransport::UNIQUE_KEY => 'name',
                ),
					'Plugins' => array(
				            xPDOTransport::PRESERVE_KEYS => false,
			        	      xPDOTransport::UPDATE_OBJECT => true,
				            xPDOTransport::UNIQUE_KEY => 'name',
				            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
					            'PluginEvents' => array(
				        		        xPDOTransport::PRESERVE_KEYS => true,
					        	        xPDOTransport::UPDATE_OBJECT => false,
						              xPDOTransport::UNIQUE_KEY => array('pluginid','event'),
			        		      ),
							   ),
		   	  ),
		        'Templates' => array(
		            xPDOTransport::PRESERVE_KEYS => false,
	        	    xPDOTransport::UPDATE_OBJECT => true,
		            xPDOTransport::UNIQUE_KEY => 'templatename',
		        ),
		        'TemplateVars' => array(
		            xPDOTransport::PRESERVE_KEYS => false,
		            xPDOTransport::UPDATE_OBJECT => true,
		            xPDOTransport::UNIQUE_KEY => 'name',
		        ),
       	 ),
        ),
        'Snippets' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
        'Chunks' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
        'Plugins' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
            xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
                'PluginEvents' => array(
                xPDOTransport::PRESERVE_KEYS => true,
                xPDOTransport::UPDATE_OBJECT => false,
                xPDOTransport::UNIQUE_KEY => array('pluginid','event'),
                ),
            ),
        ),
        'Templates' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'templatename',
        ),
        'TemplateVars' => array(
            xPDOTransport::PRESERVE_KEYS => false,
            xPDOTransport::UPDATE_OBJECT => true,
            xPDOTransport::UNIQUE_KEY => 'name',
        ),
    )
);

/* create category vehicle */
$vehicle = $builder->createVehicle($category,$attr);
unset($category, $attr);

$modx->log(modX::LOG_LEVEL_INFO,'Adding file resolvers to category...');
$vehicle->resolve('file',array(
    'source' => $sources['source_assets'],
    'target' => "return MODX_ASSETS_PATH . 'components/';",
));
$vehicle->resolve('file',array(
    'source' => $sources['source_core'],
    'target' => "return MODX_CORE_PATH . 'components/';",
));

/* init db tables */
$modx->log(modX::LOG_LEVEL_DEBUG, 'Adding in PHP Resolvers...');
$vehicle->resolve('php', array(
    'source' => $sources['resolvers'] . 'resolve.tables.php',
));

$builder->putVehicle($vehicle);
unset($vehicle);


/* load system settings */
$settings = include $sources['data'].'transport.settings.php';
if (!is_array($settings)) {
    $modx->log(modX::LOG_LEVEL_ERROR,'Could not package in settings.');
} else {
    $attributes= array(
        xPDOTransport::UNIQUE_KEY => 'key',
        xPDOTransport::PRESERVE_KEYS => true,
        xPDOTransport::UPDATE_OBJECT => false,
    );
    foreach ($settings as $setting) {
        $vehicle = $builder->createVehicle($setting,$attributes);
        $builder->putVehicle($vehicle);
    }
    $modx->log(modX::LOG_LEVEL_INFO,'Packaged in '.count($settings).' System Settings.');
}
unset($settings,$setting,$attributes);

/* now pack in the license file, readme and setup options */
$builder->setPackageAttributes(array(
    'license' => file_get_contents($sources['docs'] . 'license.txt'),
    'readme' => file_get_contents($sources['docs'] . 'readme.txt'),
    'changelog' => file_get_contents($sources['docs'] . 'changelog.txt'),
    'setup-options' => array(
        'source' => $sources['build'].'_setup.options.php',
    ),
));
$modx->log(modX::LOG_LEVEL_INFO,'Added package attributes and setup options.');

/* zip up package */
$modx->log(modX::LOG_LEVEL_INFO,'Packing up transport package zip...');
$builder->pack();

$mtime= microtime();
$mtime= explode(" ", $mtime);
$mtime= $mtime[1] + $mtime[0];
$tend= $mtime;
$totalTime= ($tend - $tstart);
$totalTime= sprintf("%2.4f s", $totalTime);

$modx->log(modX::LOG_LEVEL_INFO,"\n<br />Package Built.<br />\nExecution time: {$totalTime}\n");

exit();
