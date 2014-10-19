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

// Create category
$category= $modx->newObject('modCategory');
$category->set('id',1);
$category->set('category',PKG_NAME);
$modx->log(modX::LOG_LEVEL_INFO, 'Packaged in "'. PKG_NAME .'" category.');
flush();

// Add Elements to Category
$BUILD_CATEGORY= array('Snippets', 'Chunks', 'TemplateVars', 'Plugins');
foreach ($BUILD_CATEGORY as $mycat)
{
	if(file_exists($sources['data'] . 'transport.'. strtolower($mycat) .'.php'))
	{
	        $cat_element = include $sources['data'] . 'transport.'. strtolower($mycat) .'.php';
	        if (is_array($cat_element))
		{
	                $category->addMany($cat_element, $mycat);

	        } else {
	                $cat_element = array();
	                $modx->log(modX::LOG_LEVEL_ERROR, 'No '. $mycat .' defined.');

	        }
	        $modx->log(modX::LOG_LEVEL_INFO, 'Packaged in ' . count($cat_element) . ' '. $mycat );
	        flush();
	        unset($cat_element);
	}
}


// create category vehicle
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


// Add Resolvers
$BUILD_RESOLVERS= array('tables', 'setup', 'update');
foreach ($BUILD_RESOLVERS as $resolver) 
{
	if ( file_exists($sources['resolvers'] . 'resolve.'.$resolver.'.php') )
	{
		if ($vehicle->resolve('php', array('source' => $sources['resolvers'] . 'resolve.'.$resolver.'.php'))) {
			$modx->log(modX::LOG_LEVEL_INFO,'Added Resolver "'.$resolver.'" to category.');

		} else {
			$modx->log(modX::LOG_LEVEL_INFO,'Could not add resolver "'.$resolver.'" to category.');
		}
	}
}
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

$modx->log(modX::LOG_LEVEL_INFO,"\nPackage Built.\nExecution time: {$totalTime}\n");

session_write_close();
exit();
