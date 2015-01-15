<?php

/**
 * LudwigSpeedUp
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigSpeedUp is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigSpeedUp is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigSpeedUp; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigspeedup
 */
/**
 * Functions for SpeedUp
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 *          version 2 or (at your option) any later version for ludwigspeedup
 * @package ludwigspeedup
 */
class LudwigSpeedUp
{
	private $modx;
	public $compress_stats = array(
		'js' => NULL, 
		'css' => NULL, 
		'html' => NULL
	);
	
	// Package information
	private $PKG_NAME;
	private $PKG_NAME_LOWER;
	
	// Cache Variables
	public $cache_expires = 0;
	public $cached_content = '';
	private $cache_options = array();
	private $service_depth = 2;
	private $seofriendly = 0;
	public $content = '';

	public function __construct( modX &$modx, &$content )
	{

		$this->modx = &$modx;
		$this->content = &$content;
		
		// Define MODX Extra name
		$this->PKG_NAME = 'LudwigSpeedUp';
		$this->PKG_NAME_LOWER = strtolower( $this->PKG_NAME );
		
		// MODX options
		$this->cache_expires = $modx->getOption( $this->PKG_NAME_LOWER . '.cache_expires', null, 3600, true );
		
		// Get System Setting Options
		$this->service_depth = $this->modx->getOption( $this->PKG_NAME_LOWER . '.collectassets.depth', null, 2, true ); // Recursive search depth: default=2
		$this->seofriendly = 0; // $modx->getOption('friendly_alias_urls', null, false, true ); // For link generation
	
	}
	
	// Get External Files
	private function getExternal( $url = '' )
	{
		// Filter relative URLs
		if ( $url[0] === '/' )
		{
			$url = MODX_SITE_URL . $url;
		}
		
		/* REST API config */
		$config = array_merge( array(
			'format' => 'json',  // json or xml, the format to request
			'suppressSuffix' => true,  // if false, will append .json or .xml to the URI requested
			'curlOptions' => array(
				'timeout' => 30,  // cURL timeout
				'otherCurlOption' => 1
			), 
			'headers' => array(), 
			'userAgent' => 'MODX RestClient/1.0.0', 
			'defaultParameters' => array()
		) );
		
		/* load the ModX REST service */
		$client = $this->modx->getService( 'rest', 'rest.modRest', '', $config );
		return ( $client->get( $url )->responseBody );
	
	}
	
	// What is the result of the compression?
	private function compress_stats( $type, $raw = '', $compressed = '' )
	{

		$raw_len = strlen( $raw );
		$compressed_len = strlen( $compressed );
		$this->compress_stats[$type] = round( ( ( $raw_len - $compressed_len ) / $raw_len * 100 ), 2 );
		
		return ( ( strlen( $compressed ) > 0 ) ? $compressed : $raw );
	
	}
	
	// Minify CSS
	public function minify_css()
	{

		$search = array(
			'!/\*.*?\*/!s', 
			'/\n\s*\n/',  // comments
			'/[\n\r \t]/', 
			'/ +/', 
			'/ ?([,:;{}]) ?/',  // spaces
			'/;}/'
		); // trailing;
		$replace = array(
			'', 
			"\n",  // comments
			' ', 
			' ', 
			'$1',  // spaces
			'}'
		); // trailing;
		      
		// Save compression stats
		$this->content = $this->compress_stats( 'css', $this->content, trim( preg_replace( $search, $replace, $this->content ) ) );
		
		return ( $content );
	
	}
	
	/*
	 * Minify JS
	 * Using JShrink class from Robert Hafner
	 * @package JShrink
	 * @author Robert Hafner <tedivm@tedivm.com>
	 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
	 */
	public function minify_js()
	{

		require_once ( MODX_CORE_PATH . "components/" . $this->PKG_NAME_LOWER . "/model/optimize/minify_js.class.php" );
		if ( class_exists( '\JShrink\Minifier' ) )
		{
			// Save compression stats
			$this->content = $this->compress_stats( 'js', $this->content, \JShrink\Minifier::minify( $this->content ) );
		}
		return;
	
	}
	
	/*
	 * Minify HTML
	 * Using Minify HTML class from Stephen Clay
	 * @package Minify
	 * @author Stephen Clay <steve@mrclay.org>
	 * @license https://minify.googlecode.com/git/LICENSE.txt
	 */
	public function minify_html()
	{

		require_once ( MODX_CORE_PATH . "components/" . $this->PKG_NAME_LOWER . "/model/optimize/minify_html.class.php" );
		if ( class_exists( 'Minify_HTML' ) )
		{
			$options = array(
				'xhtml' => true
			);
			
			$mh = new Minify_HTML( $this->content, $options );
			
			// Save compression stats
			$this->content = $this->compress_stats( 'html', $this->content, $mh->process() );
		}
		return;
	
	}
	
	// Get Content Types in Modx
	public function get_contenType_id( $type = array('text/javascript' => 0, 'text/css' => 0) )
	{
		// Get Content Types: use $type[MIMETYPE]
		$query = $this->modx->newQuery( 'modContentType', array(
			'mime_type:IN' => array_keys( $type )
		) );
		$query->sortby( 'id' );
		
		// Get an array with mime type id's
		$collection = $this->modx->getCollection( 'modContentType', $query );
		foreach( $collection as $key => $c )
		{
			$type[$c->get( 'mime_type' )] = $c->get( 'id' );
		}
		
		return ( $type );
	
	}
	
	// Get all IDs of Services
	private function get_services( $service_id )
	{
		// Get MIME Types
		$mime_types = $this->get_contenType_id();
		
		$c = $this->modx->newQuery( 'modResource' );
		$children = $this->modx->getChildIds( $service_id, $this->service_depth );
		if ( count( $children ) > 0 )
		{
			$filter = array(
				'id:IN' => $children, 
				'published' => 1, 
				'content_type:IN' => array_values( $mime_types )
			);
			$c->where( $filter, xPDOQuery::SQL_AND );
		}
		
		// sort by menuindex ascending
		$c->sortby( 'menuindex', 'ASC' );
		
		// get the resources as xPDOObjects
		$resources = $this->modx->getCollection( 'modResource', $c );
		
		// Get IDs
		$ids = array();
		foreach( $resources as $res )
		{
			$ids[array_search( $res->get( 'content_type' ), $mime_types )][] = $res->get( 'id' );
		}
		
		return ( $ids );
	
	}
	
	// Generate Service URL
	private function generate_url( $type = 'css', $query = '' )
	{
		
		// Url to the services
		$url = $this->modx->getOption( 'assets_url' ) . 'components/' . $this->PKG_NAME_LOWER . '/services';
		
		// Is URL SEO friendly?
		if ( $this->seofriendly )
		{
			$url = $url . '_' . urlencode( $query ) . '.' . $type;
		} else
		{
			
			$url = $url . '.php?' . http_build_query( array(
				$type => $query
			), '', '&amp;' );
		}
		
		return ( $url );
	
	}
	
	// Add Assets like CSS or JS from plugins or snippets to your Content
	public function add_extra_assets()
	{
		// Get Assets from MODX snippets and plugins
		$script_ary = array();
		if ( is_array( $this->modx->sjscripts ) )
			$script_ary = array_merge( $script_ary, $this->modx->sjscripts );
		
		if ( is_array( $this->modx->jscripts ) )
			$script_ary = array_merge( $script_ary, $this->modx->jscripts );
			
			// Search for assets
		$new_scripts = array(
			'text/javascript' => array(), 
			'text/css' => array()
		);
		$mime_types = array(
			'link' => 'text/css', 
			'script' => 'text/javascript'
		);
		foreach( $script_ary as $val )
		{
			
			// Find css and js links
			if ( preg_match( "/(<(script|link).*?(href|src)=['|\"](.*?)['|\"])(.*)/is", $val, $matches ) )
			{
				// Create Asset Array to save into a tv
				$new_scripts[$mime_types[$matches[2]]][] = $matches[4];
				
				// Delete Asset in Content
				$this->content = str_replace( $matches[0], '', $this->content );
			}
		}
		
		// Add assets to template variabel ludwigspeedup
		if ( $this->modx->resource->setTVValue( $this->PKG_NAME_LOWER, json_encode( $new_scripts ) ) )
		{
			// Delete all scripts
			$this->modx->sjscripts = array();
			$this->modx->jscripts = array();
			
			// Generate URL
			$url_ary = array(
				'link' => '/assets/components/ludwigspeedup/services.php?css=' . $this->modx->resource->get( 'id' ) . '&amp;extra=1', 
				'script' => '/assets/components/ludwigspeedup/services.php?js=' . $this->modx->resource->get( 'id' ) . '&amp;extra=1'
			);
			
			// Insert new assets in HTML
			// CSS after </html>
			$this->insert_asset( 'text/css', $url_ary['link'], true );
			
			// JS before </body>
			$this->insert_asset( 'text/javascript', $url_ary['script'], true );
		}
		
		return;
	
	}
	
	// Add Assets like CSS or JS to your Content
	public function add_service_assets( $sid = 0 )
	{
		// Find js and css in content ressources
		$services = array();
		if ( ( $sid !== 0 ) && intval( $sid ) && ( $sid >= 0 ) )
		{
			
			$services = $this->get_services( $sid, $this->service_depth );
			foreach( $services as $key => $v_ary )
			{
				// Fetch all links from JS and CSS Ressources
				$crypt_link = urlencode( base64_encode( gzdeflate( json_encode( $v_ary ), 9 ) ) );
				switch( $key )
				{
					// JS - Before BODY end
					case 'text/javascript':
						$this->insert_asset( $key, $this->generate_url( 'js', $crypt_link ) );
						break;
					
					// CSS - Before HEAD end
					case 'text/css':
						$this->insert_asset( $key, $this->generate_url( 'css', $crypt_link ) );
						break;
				}
			}
		}
		
		return;
	
	}
	
	// Insert Asset into content
	private function insert_asset( $mime_type = '', $url = '', $extra = false )
	{

		switch( $mime_type )
		{
			// JS - Before BODY end
			case 'text/javascript':
				$this->content = str_replace( '</body>', '<script type="text/javascript" src="' . $url . '"></script></body>', $this->content );
				break;
			
			// CSS - Before HEAD end
			case 'text/css':
				
				if ( $extra )
				{
					// CSS - Before BODY end
					$this->content = str_replace( '</body>', '<link property="stylesheet" rel="stylesheet" href="' . $url . '" type="text/css"/></body>', $this->content );
				} else
				{
					// CSS - Before HEAD end
					$this->content = str_replace( '</head>', '<link rel="stylesheet" href="' . $url . '" type="text/css"/></head>', $this->content );
				}
				break;
		}
	
	}
	
	// Get assets content from MODX resources and from external
	public function get_service_content( $in_ary = array(), $mime_type = '' )
	{
		// Define variables
		$this->content = '';
		
		// Get content
		$c = $this->modx->newQuery( 'modResource', array(
			'id:IN' => $in_ary, 
			'contentType' => $mime_type
		) );
		$c->sortBy( 'FIELD(modResource.id, ' . implode( ',', $in_ary ) . ')' );
		$resources = $this->modx->getCollection( 'modResource', $c );
		foreach( $resources as $res )
		{
			
			// Select class key
			switch( $res->get( 'class_key' ) )
			{
				case 'modWebLink':
					$this->content .= $this->getExternal( $res->get( 'content' ) );
					break;
				
				default:
					$this->content .= $res->get( 'content' );
					break;
			}
		}
		
		return;
	
	}
	
	// Get extra assets content from external resources
	public function get_extra_content( $id = NULL, $mime_type = '' )
	{
		// Define variables
		$this->content = '';
		
		// Get Object for ID
		if ( !is_null( $id ) && intval( $id ) && ( $id > 0 ) && !empty( $mime_type ) )
		{
			$resource = $this->modx->getObject( 'modResource', $id );
			$in_ary = json_decode( $resource->getTVValue( $this->PKG_NAME_LOWER ), true );
			
			// Select MIME Source
			if ( is_array( $in_ary ) && ( count( $in_ary ) > 0 ) )
			{
				
				// Select only needed mime type
				$in_ary = $in_ary[$mime_type];
				
				// Get content from all assets
				if ( is_array( $in_ary ) && ( count( $in_ary ) > 0 ) )
				{
					foreach( $in_ary as $val )
					{
						if ( $val[0] === '/' )
						{
							$val = MODX_SITE_URL . $val;
						}
						$this->content .= $this->getExternal( $val );
					}
				}
			}
		}
		return;
	
	}
	
	// Have we already cached the content?
	public function is_cached( $url, $cache_it = false )
	{
		// Using Modx Cache for 1h per URL
		$this->cache_options = array(
			"opt" => array(
				xPDO::OPT_CACHE_KEY => $this->PKG_NAME, 
				xPDO::OPT_CACHE_EXPIRES => $this->cache_expires
			), 
			"name" => $this->PKG_NAME_LOWER . '_' . md5( $url )
		);
		$this->cached_content = $this->modx->cacheManager->get( $this->cache_options["name"], $this->cache_options["opt"] );
		if ( is_null( $this->cached_content ) || !(bool)$cache_it )
		{
			return ( false );
		}
		
		return ( true );
	
	}
	
	// Cache content
	public function cache_me( $content )
	{

		if ( count( $this->cache_options ) > 0 )
		{
			$this->modx->cacheManager->set( $this->cache_options["name"], $content, $this->cache_expires, $this->cache_options["opt"] );
		}
		return;
	
	}

}
