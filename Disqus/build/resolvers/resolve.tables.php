<?php
/**
 * Resolve creating custom db tables during install.
 *
 * @package ludwigdisqus
 * @subpackage build
 */

/* define package name */
define('PKG_NAME','LudwigDisqus');
define('PKG_NAME_LOWER',strtolower(PKG_NAME));

if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:

            $modx =& $object->xpdo;
            $modelPath = $modx->getOption('core_path').'components/'. PKG_NAME_LOWER .'/model/';
	    $modx->addPackage( PKG_NAME_LOWER, $modelPath, 'disqus_');

            $manager = $modx->getManager();
            $manager->createObjectContainer('Comment');
            $manager->createObjectContainer('Thread');

            break;
        case xPDOTransport::ACTION_UPGRADE:
            break;
    }
}
return true;
