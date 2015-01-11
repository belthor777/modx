<?php

/**
 * LudwigLaunchpadStats
 * Copyright (c) 2015 by Thomas Ludwig
 *
 * LudwigLaunchpadStats is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigLaunchpadStats is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigLaunchpadStats; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwiglaunchpadstats
 */
/**
 *
 * LudwigLaunchpadStats
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright (c) 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 *          version 2 or (at your option) any later version for ludwiglaunchpadstats
 * @package ludwiglaunchpadstats
 */
class LudwigLaunchpadStats
{
	private $modx;
	
	// Launchpad Variables
	public $fields = array();
	private $ppa_user = '';
	private $ppa_name = '';
	public $binary_name = '';
	public $binary_status = 'Published';
	private $url_ppa = '';
	public $get_dl_stats = false;
	public $get_dl_daily_stats = false;
	private $is_config_set = false;
	
	// Package information
	private $PKG_NAME;
	private $PKG_NAME_LOWER;
	
	// Cache Variables
	public $cache_expires = 0;
	public $cached_content = '';
	private $cache_options = array();
	
	// MODX REST
	private $client;

	/**
	 * Construction
	 *
	 * @param modX $modx        	
	 */
	public function __construct( modX &$modx )
	{
		// Define MODX Extra name
		$this->modx = &$modx;
		$this->PKG_NAME = 'LudwigLaunchpadStats';
		$this->PKG_NAME_LOWER = strtolower( $this->PKG_NAME );
		
		/* load the ModX REST service */
		$config = array(
			'format' => 'json',  // json or xml, the format to request
			'suppressSuffix' => true,  // if false, will append .json or .xml to the URI requested
			'curlOptions' => array(
				'timeout' => 30,  // cURL timeout
				'otherCurlOption' => 1
			), 
			'headers' => array(), 
			'userAgent' => 'MODX RestClient/1.0.0', 
			'defaultParameters' => array()
		);
		$this->client = $this->modx->getService( 'rest', 'rest.modRest', '', $config );
	
	}

	/**
	 * Config this package
	 *
	 * @param array $conf_ary        	
	 */
	public function config( $conf_ary = array() )
	{
		// Mandatory
		if ( isset( $conf_ary['ppa_user'] ) && isset( $conf_ary['ppa_name'] ) )
		{
			$this->ppa_user = $conf_ary['ppa_user'];
			$this->ppa_name = $conf_ary['ppa_name'];
			$this->url_ppa = 'https://api.launchpad.net/1.0/~' . $this->ppa_user . '/+archive/' . $this->ppa_name;
			$this->is_config_set = true;
		}
		
		// Recommended
		if ( isset( $conf_ary['binary_name'] ) )
		{
			$this->binary_name = $conf_ary['binary_name'];
		}
		
		// Recommended
		if ( isset( $conf_ary['binary_status'] ) )
		{
			$this->binary_status = $conf_ary['binary_status']; // Deleted, Published....
		}
		
		// Get enhanced Statistics
		if ( isset( $conf_ary['get_dl_stats'] ) )
		{
			$this->get_dl_stats = (bool)$conf_ary['get_dl_stats'];
		}
		
		// Get enhanced Statistics
		if ( isset( $conf_ary['get_dl_daily_stats'] ) )
		{
			$this->get_dl_daily_stats = (bool)$conf_ary['get_dl_daily_stats'];
		}
	
	}

	/**
	 * Get total downloaded
	 *
	 * @param string $url        	
	 * @return number
	 */
	private function get_total_downloads( $url = '' )
	{

		$resp = $this->client->get( $url . '?ws.op=getDownloadCount' );
		return ( intval( $resp->responseBody ) );
	
	}

	/**
	 * Get total downloaded
	 *
	 * @param string $url        	
	 * @param string $start_date        	
	 * @param string $end_date        	
	 */
	private function get_daily_downloads( $url = '', $start_date = '', $end_date = '' )
	{

		$t_window = '';
		
		// Filter End Date
		if ( $end_date == '' )
			$t_window = '&end_date=' . date( "Y-m-d" );
			
			// Filter Start Date
		if ( $start_date != '' )
			$t_window = $t_window . '&start_date=' . $start_date;
		
		$resp = $this->client->get( $url . '?ws.op=getDailyDownloadTotals' . $t_window );
		return ( $resp->responseBody );
	
	}

	/**
	 * Get Binaries
	 *
	 * @param string $url        	
	 * @param string $created_since_date        	
	 */
	private function get_PublishedBinaries( $url = '', $created_since_date = '-1 year' )
	{
		// Variables
		$status = '';
		$binary_name = '';
		
		if ( !empty( $this->binary_status ) )
			$status = '&status=' . $this->binary_status;
		
		if ( !empty( $this->binary_name ) )
			$binary_name = "&exact_match=true&binary_name=" . $this->binary_name;
		
		if ( !empty( $created_since_date ) )
		{
			$created_since_date = "&created_since_date=" . date( "Y-m-d", strtotime( $created_since_date, time() ) );
		}
		
		$url = $url . '?ws.op=getPublishedBinaries' . $status . $binary_name . $created_since_date . '&ws.size=300';
		
		$resp = $this->client->get( $url );
		return ( $resp->responseBody );
	
	}

	/**
	 * Extract the exact package version
	 *
	 * @param string $version        	
	 * @param string $split        	
	 * @return array
	 */
	private function get_PackageVersion( $version = '', $split = "~" )
	{

		return ( (array)explode( $split, $version ) );
	
	}

	/**
	 * Extract Architecture and Ubuntu Version
	 *
	 * @param string $url        	
	 * @return array
	 */
	private function get_arch_destri( $url = '' )
	{

		$stats = array(
			"arch" => '', 
			"distri" => ''
		);
		
		$arch = explode( "/", $url );
		if ( count( $arch ) > 2 )
		{
			$stats['arch'] = end( $arch );
			$stats['distri'] = prev( $arch );
		}
		
		return ( (array)$stats );
	
	}

	/**
	 * Get sum of all downloads
	 *
	 * @param array $fields
	 *        	A multi array reference
	 * @param string $skey
	 *        	Array key to sum e.g. 'total_dl'
	 */
	private function add_download_sum( &$fields, $skey = 'total_dl' )
	{

		$fields[$skey] = 0;
		
		// Get next level
		foreach( $fields as $key => $val )
		{
			if ( array_key_exists( $skey, $val ) )
			{
				
				$fields[$skey] += $val[$skey];
			
			} else
			{
				
				$this->add_download_sum( $val, $skey );
				$fields[$key] = $val;
				$fields[$skey] += $val[$skey];
			}
		}
		return;
	
	}

	/**
	 * Retrieve Data from Launchpad
	 */
	public function get_ppa_data()
	{
		// Is this class already configured?
		if ( !$this->is_config_set )
		{
			$this->modx->log( modX::LOG_LEVEL_ERROR, "Please configure " . $this->PKG_NAME . ' at first!' );
			return;
		}
		
		// Iterate over all binaries
		$url = $this->url_ppa;
		do
		{
			// Fetch Results
			$res_ary = $this->modx->fromJSON( $this->get_PublishedBinaries( $url, '-5 years' ) );
			
			// Variables
			$arch_destri = array();
			$pversion = array();
			
			// Get external informations
			$posts = $res_ary['entries'];
			$url = $res_ary['next_collection_link'];
			$cursor = ( array_key_exists( 'next_collection_link', $res_ary ) ? true : false );
			
			if ( is_array( $res_ary ) && is_array( $posts ) && ( count( $posts ) > 0 ) )
			{
				foreach( $posts as $post )
				{
					$pversion = $this->get_PackageVersion( $post['binary_package_version'] );
					$arch_destri = $this->get_arch_destri( $post['distro_arch_series_link'] );
					
					$bin_name = $post['binary_package_name'];
					$distri = $arch_destri['distri'];
					$arch = $arch_destri['arch'];
					$published = strtotime( $post['date_published'] );
					
					$this->fields[$bin_name][$pversion[0]][$distri][$arch] = array(
						'self_link' => $post['self_link'], 
						'total_dl' => ( $this->get_dl_stats ) ? $this->get_total_downloads( $post['self_link'] ) : 0, 
						'daily_dl' => ( $this->get_dl_daily_stats ) ? $this->get_daily_downloads( $post['self_link'], date( 'Y-m-d', $published ) ) : "{}", 
						'date_published' => $published
					);
				}
			}
		} while( $cursor );
		
		// Get downloads count
		if ( $this->get_dl_stats )
		{
			$this->add_download_sum( $this->fields );
		}
	
	}
	
	// Have we already cached the content?
	/**
	 */
	public function is_cached( $url = '', $cache_it = false )
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
