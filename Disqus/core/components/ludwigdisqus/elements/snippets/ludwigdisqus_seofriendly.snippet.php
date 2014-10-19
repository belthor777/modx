/**
 * ludwigdisqus_seofriendly
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigdisqus_seofriendly is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigdisqus_seofriendly is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigdisqus_seofriendly; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * ludwigdisqus_seofriendly
 *
 * Optimize Disqus Comments for Search Engines 
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigdisqus sourcecode
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License
 * version 2 or (at your option) any later version for Disqus-PHP API
 * @package ludwigdisqus
 */

/*
[[!ludwigdisqus_seofriendly]]
*/
$properties =& $scriptProperties;

// Variables
$pak = 'ludwigdisqus';
$properties['chunk'] = (isset($_GET[$properties['chunk']]) ? $_GET[$properties['chunk']] : (!empty($chunk)) ? $chunk : $pak .'_seofriendly');
$activated = array(	'plugin' => $modx->getOption( $pak .'.activated'),
					'seofriendly' => $modx->getOption( $pak .'.seofriendly') );
$output = '';

// Check if package is installed and activated
$ldpath = MODX_CORE_PATH.'components/'. $pak .'/model/';
if(!$modx->addPackage($pak, $ldpath, 'disqus_') || !$activated['plugin'] ) 
{
	return '';

// Load needed lib API disqus-php
} elseif ($activated['seofriendly']) {

	$modx_id = $modx->resource->get('id');
	$res = $modx->query("SELECT t.modx_id, c.author_name, c.comment, c.created, c.like, c.dislike, c.parent_id, c.isDeleted ".
						"FROM modx.disqus_comment c, modx.disqus_thread t ".
						"WHERE t.id=c.thread_id AND t.modx_id=". intval($modx_id) );
	if (is_object($res)) 
	{
		$data = $res->fetchAll(PDO::FETCH_ASSOC);

		foreach ($data as $d) 
		{
			if (!$d['isDeleted'])
			{
			  $output .= $modx->getChunk($properties['chunk'], array(
				  'author_name' => $d['author_name'],
				  'comment' => nl2br($d['comment']),
				  'created' => $d['created'],    // Format should be 2012-05-18T16:22Z
				  'like' => $d['like'],
				  'dislike' => $d['dislike'],
				  'parent_id' => $d['parent_id']
			  ));
			}
		}
		 
	}

}

return $output;