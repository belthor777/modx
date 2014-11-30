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

class LudwigShariff
{
	//protected $client;
	public $instances = array();
	public $services = [];
	public $modx;

	public function __construct( modX &$modx )
	{
			$this->modx =& $modx;

			/* Get Services */
			$this->getServices();
	}

	// Load all services
	public function getServices()
	{
		$defservice= '.service.php';
		$serviceNames= array();

		// Get Service Interface
		require_once( dirname(__FILE__) .'/ServiceInterface.php' );

                // Get Service Interface
                require_once( dirname(__FILE__) .'/requests.class.php' );

		// Get Services
		$files= new RegexIterator( new FilesystemIterator(dirname(__FILE__)), '/'. $defservice .'$/');
		foreach ($files as $fileinfo)
		{
			$serviceName= $fileinfo->getBasename( $defservice );
			$this->services[]= $serviceName;

			require_once( $fileinfo->getPathname() );
			$this->instances[$serviceName]= (new ReflectionClass($serviceName))->newInstance( $this->modx );
		}
	}

}
