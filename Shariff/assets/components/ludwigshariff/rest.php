<?php
/**
 * LudwigShariff
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigShariff is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigShariff is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigShariff; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigshariff
 */
/**
 * Connects Shariff with the RESTful API of Modx
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigshariff
 * @package ludwigshariff
 */

// Defines
define('PKG_NAME', 'LudwigShariff');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

// Boot up MODX
require_once dirname(dirname(__FILE__)) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');

// Boot up any service classes or packages (models) you will need
$path = $modx->getOption( PKG_NAME_LOWER .'.core_path', null, $modx->getOption('core_path').'components/'. PKG_NAME_LOWER .'/') . 'model/'. PKG_NAME_LOWER .'/';
$modx->getService(PKG_NAME_LOWER, PKG_NAME, $path);

// Load the modRestService class and pass it some basic configuration
$rest = $modx->getService('rest', 'rest.modRestService', '', array(
    'basePath' => dirname(__FILE__) . '/Controllers/',
    'controllerClassSeparator' => '',
    'controllerClassPrefix' => PKG_NAME_LOWER,
    'xmlRootNode' => 'response',
));

// Prepare the request
$rest->prepare();

// Make sure the user has the proper permissions, send the user a 401 error if not
if (!$rest->checkPermissions()) {
    $rest->sendUnauthorized(true);
}

// Run the request
$rest->process();