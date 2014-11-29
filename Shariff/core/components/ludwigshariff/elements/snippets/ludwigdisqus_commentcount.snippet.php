<?php
/**
 * ludwigdisqus_commentcount
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigdisqus_commentcount is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigdisqus_commentcount is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigdisqus_commentcount; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * ludwigdisqus_commentcount
 *
 * Get Disqus comment count from the actual Modx page  
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigdisqus sourcecode
 * @package ludwigdisqus
 */

/*
[[!ludwigdisqus_commentcount]]
*/
// Variables
$pak = 'ludwigdisqus';
$activated = array(	'plugin' => $modx->getOption( $pak .'.activated'),
					'seofriendly' => $modx->getOption( $pak .'.seofriendly') );
$output = 0;

// Check if package is installed and activated
$ldpath = MODX_CORE_PATH.'components/'. $pak .'/model/';
if(!$modx->addPackage($pak, $ldpath, 'disqus_') || !$activated['plugin'] ) 
{
	return $output;

// Check if the advanced mode is activated
} elseif ($activated['seofriendly']) {

	$res = $modx->query(	"SELECT count(c.id) as counts ".
							"FROM modx.disqus_comment c, modx.disqus_thread t ".
							"WHERE t.id=c.thread_id AND t.modx_id=". intval( $modx->resource->get('id') ));
	if (is_object($res))
	{
	    $r = $res->fetch(PDO::FETCH_ASSOC);
		$output = $r['counts'];
	}
}

return $output;