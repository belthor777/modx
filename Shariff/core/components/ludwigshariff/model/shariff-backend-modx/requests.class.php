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
 * Request data from social services
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigshariff
 * @package ludwigshariff
 */

class Requests
{
	//protected $client;
	public $client;
	public $config = array();
	public $modx;

	public function __construct( modX &$modx, array $config = array() )
	{
			$this->modx =& $modx;
			//$this->modx->setLogLevel(xPDO::LOG_LEVEL_DEBUG);

			/* REST API config */
			$this->config = array_merge(array(
				'format' => 'json', // json or xml, the format to request
				'suppressSuffix' => true, // if false, will append .json or .xml to the URI requested
				'curlOptions' => array(
					'timeout' => 30, // cURL timeout
					'otherCurlOption' => 1,
				),
				'headers' => array(),
				'userAgent' => 'MODX RestClient/1.0.0',
				'defaultParameters' => array(),
			), $config);

			/* load the ModX REST service */
			$this->client= $this->modx->getService('rest','rest.modRest','', $this->config);
	}

	protected function createRequest($url, $method = 'GET', $data = null)
	{
		$result= array();

		switch ($method)
		{
			case 'GET':
				$result= $this->client->get($url);
				break;
			 case 'POST':
			 	$result= $this->client->post($url, $data);
			 	break;
		}

		if ( $result->responseError == "" )
		{
			return( $this->modx->fromJSON( $result->responseBody ) );

		} else {

			return( $result->responseError );
		}
	}
}
