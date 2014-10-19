<?php
/**
 * ludwigdisqus_import
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigdisqus_import is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigdisqus_import is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigdisqus_import; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * ludwigdisqus_import
 *
 * Import Items from Disqus for SeoOptimization
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
[[!ludwigdisqus_import]]
*/

// Variables
$pak = 'ludwigdisqus';
$api_key = $modx->getOption( $pak .'.api_key');
$disqus_fetch_limit = $modx->getOption( $pak .'.fetch_limit');
$disqus_fetch_order = 'asc';
$shortname = $modx->getOption( $pak .'.shortname');
$activated = array(	'plugin' => $modx->getOption( $pak .'.activated'),
			'seofriendly' => $modx->getOption( $pak .'.seofriendly') );
$force_db_rebuild = $modx->getOption( $pak .'.force_db_rebuild');

// Max fetch limit is 100
if( $disqus_fetch_limit > 100 )
{
	$disqus_fetch_limit= 100;
}

// Check if package is installed and activated
$ldpath = MODX_CORE_PATH.'components/'. $pak .'/model/';
if(!$modx->addPackage($pak, $ldpath, 'disqus_') || !$activated['plugin'] )
{
	return 'There was a problem adding the LudwigDisqus package!  Check the logs for more info!';

// Load needed lib API disqus-php
} elseif ($activated['seofriendly']) {

	require_once($ldpath.'disqus-php/disqusapi/disqusapi.php');
	$disqus = new DisqusAPI( $api_key, 'json', '3.0' );

	// Set Disqus fetch parameter
	$params = array('forum' => $shortname,
			'order' => $disqus_fetch_order,
			'limit' => $disqus_fetch_limit );

	// Trunicate table
	if ( $force_db_rebuild )
	{
		$modx->removeCollection('Comment', array());

	// Get latest comment date
	} else {
		$res = $modx->query("SELECT MAX(created) as max FROM disqus_comment");
		if (is_object($res))
		{
			$row = $res->fetch(PDO::FETCH_ASSOC);
			if (!empty($row['max']))
			{
				$params['since'] = $row['max']+1;
			}
		}
	}

	// Save Comments to Database
	///////////////////////////////
	$fields= array();
	do {

		// Fetch Disqus Entries
 		$posts = $disqus->posts->list($params);
		$cursor = $posts->cursor;
		$params['cursor'] = $cursor->next;

		foreach ($posts as $post)
		{
			$fields = array(
				'id' => intval( $post->id ),
				'author_name' => $post->author->name,
				'comment' => $post->raw_message,
				'thread_id' => intval( $post->thread ),
				'parent_id' => ( is_null( $post->parent ) ? NULL : intval($post->parent) ),
				'like' => intval( $post->likes ),
				'dislike' => intval( $post->dislikes ),
				'isSpam' => boolval( $post->isSpam ),
				'isDeleted' => boolval( $post->isDeleted ),
				'created' => intval( strtotime($post->createdAt."+0000") ) // Disqus uses GMT
			);

			$disqus_add = $modx->newObject('Comment', $fields);
			$disqus_add->save();
		}

	} while ($cursor->more);
 	unset($params['since']);
	unset($params['cursor']);


	// Trunicate table
	if ( $force_db_rebuild )
	{
		$modx->removeCollection('Thread', array());

	// Get latest comment date
	} else {
		$res = $modx->query("SELECT MAX(created) as max FROM disqus_thread");
		if (is_object($res)) 
		{
			$row = $res->fetch(PDO::FETCH_ASSOC);
			if (!empty($row['max'])) 
			{
				$params['since'] = $row['max']+1;
			}
		}
	}

	// Save Threads to Database
	///////////////////////////////
	$fields= array();
	do {

		// Fetch Disqus Entries
		$threads = $disqus->threads->list($params);
		$cursor = $threads->cursor;
		$params['cursor'] = $cursor->next;

		foreach ($threads as $thread) 
		{

			$fields = array(
				'id' => intval( $thread->id ),
				'modx_id' => intval( end($thread->identifiers) ),	// Identifier of Disqus -> We use the Modx article ID
				'title' => $thread->title,
				'created' => intval( strtotime($thread->createdAt."+0000") ) // Disqus uses GMT
			);

			$disqus_add = $modx->newObject('Thread', $fields);
			$disqus_add->save();
		}

	} while ($cursor->more);
	unset($params);

}
