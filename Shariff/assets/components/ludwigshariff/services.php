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

// Include Modx Classes
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

// Initialize Modx
$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');

// System Settings
$cache_expires= $modx->getOption( PKG_NAME_LOWER .'.cache_expires', null, 3600, true);
$whitelist_domain= $modx->getOption( PKG_NAME_LOWER .'.external_domains', null, '', true);
$whitelist_services= explode( ',', $modx->getOption( PKG_NAME_LOWER .'.services', null, '', true) );

// Is the Extra activated?
if ($modx->getOption( PKG_NAME_LOWER .'.activated', null, false, true ))
{
        // Parameter
        $url= isset($_GET['url']) ? htmlspecialchars(urldecode($_GET['url'])) : '';

        // Analyze and filter external URLs
        function parse_myurl($url, $param= -1)
        {
                if ( (strpos($url,"://") === false) && ( substr($url,0,1)!="/") )
                {
                        $url = "https://".$url;
                }
                return( parse_url( strtolower($url), $param) );
        }
        $url_whitelist = explode( ',', preg_replace('~^www[^.]*\.~', '', parse_myurl( $whitelist_domain, PHP_URL_HOST )) );
        $url_whitelist[] = parse_myurl( MODX_HTTP_HOST, PHP_URL_HOST ); // Add own Domain
        if ( !in_array( preg_replace('~^www[^.]*\.~', '', parse_myurl( $url, PHP_URL_HOST )), $url_whitelist) )
        {
                return('');
        }

        // Using Modx Cache for 1h per URL
        $cache= array(  "opt" => array( xPDO::OPT_CACHE_KEY => PKG_NAME, xPDO::OPT_CACHE_EXPIRES => $cache_expires ),
                                                "name" => PKG_NAME_LOWER .'_'. substr(md5($url), 0, 8) );
        $output= $modx->cacheManager->get($cache["name"], $cache["opt"]);

        // Load classes
        if (empty($output) || is_null($output) )
        {
                $path = $modx->getOption( PKG_NAME_LOWER .'.core_path', null, $modx->getOption('core_path').'components/'. PKG_NAME_LOWER .'/');
                $modx->getService(PKG_NAME_LOWER, PKG_NAME, $path);
                if ( is_object( $modx->ludwigshariff ) && ( $url !== '' ) )
                {
                        // Load Service Class
                        $counts= array();
                        foreach ($modx->ludwigshariff->instances as $service) 
                        {
                                // Use only allowed services
                                if (in_array( $service->getName(), $whitelist_services ) )
                                {
                                        $result= $service->getRequest( $url );
                                        $counts[ $service->getName() ] = $service->extractCount( $result );
                                }
                        }

                        // Count Total
                        $counts['total']= array_sum( $counts );

                        // Prepare Output
                        $output= html_entity_decode( json_encode( array_map('htmlentities', $counts) ) );

                        // Save Shares to TV 'LudwigShariff'
                        $alias_url= parse_myurl( $url );
                        if ( !empty( $alias_url['path'] ) && ( $alias_url['host'] == MODX_HTTP_HOST ) )
                        {
                                $resource =  $modx->getObject('modResource',array('alias' => pathinfo( $alias_url['path'], PATHINFO_FILENAME )));
                                if (!$resource->setTVValue('LudwigShariff', $output))
                                {
                                        $modx->log(xPDO::LOG_LEVEL_ERROR, 'There was a problem with TV LudwigShariff...');
                                }
                        }

                        // Cache results
                        $modx->cacheManager->set($cache["name"], $output, $cache_expires, $cache["opt"]);
                }
        }

        echo $output;
}
return('');
