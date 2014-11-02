<?php
/**
 * ludwigdisqus_resetdisqus
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigdisqus_resetdisqus is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigdisqus_resetdisqus is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigdisqus_resetdisqus; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigdisqus
 */
/**
 * ludwigdisqus_resetdisqus
 *
 * Reset Disqus threads in Modx: This is a alpha version! Be carefully!
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
[[!ludwigdisqus_resetdisqus]]
*/

// Variables
$pak = 'ludwigdisqus';
$api_key = $modx->getOption( $pak .'.api_key');
$access_token = $modx->getOption( $pak .'.access_token'); // Authentication: Need Read, Write and Manage Forum Access
$activated = array(	'plugin' => $modx->getOption( $pak .'.activated'),
							'seofriendly' => $modx->getOption( $pak .'.seofriendly'),
							'manager' => $modx->getOption( $pak .'.manager'));


// Remove, Close or get details of a thread
function disqus_manage_threads($disqus, $type, $thread_id, $access_token, $shortname)
{
	global $modx;

	$msg = '';
	$output= NULL;

	// Thread manipulation parameter
	$params = array(	'access_token' => $access_token,
						'forum'  => $shortname,
						'thread' => $thread_id,
	);

	switch ($type) 
	{
		// Close or remove a thread
		case 'close':
		case 'remove':
  			try {
				$output = $disqus->threads->close($params);
			} catch (Exception $e) {
				$msg = $e->getMessage();
			}

			// Remove a thread from Disqus and Database: Close this thread at first
			if ( $type == 'remove' )
			{

			  try {
				  $output = $disqus->threads->remove($params);

			  } catch (Exception $e) {
				  $msg = $e->getMessage();
			  }

			  // Remove from Database
			  if ( is_object($output) && ($output->code == 0) && ($output->response[0]->id === $thread_id) )
			  {
				  $modx->query("DELETE FROM modx.disqus_thread WHERE id=". $thread_id );
				  $modx->query("DELETE FROM modx.disqus_comment WHERE thread_id=". $thread_id );

				  $msg = 'Deleted successfully from Disqus and your database';
			  }
			}

		  break;

		// Get threads details 
		case 'details':
  			try {
				$output = $disqus->threads->details($params);
			} catch (Exception $e) {
				$msg = trim( $e->getMessage() );

				// // Disqus thread do not exists -> Remove thread from Database
				if ($msg == "Invalid argument, 'thread': Unable to find thread with id '". $thread_id ."'") 
				{
					$modx->query("DELETE FROM modx.disqus_thread WHERE id=". $thread_id );
					$modx->query("DELETE FROM modx.disqus_comment WHERE thread_id=". $thread_id );

					$msg = "Thread is not available anymore in Disqus, so I deleted it from database";
				}		

		  }
		  break;
	}

	// Error?
	if ($msg != '')
	{
		$modx->log(modX::LOG_LEVEL_ERROR, 'LudwigDisqus: '. strtoupper($type) .' ('. $thread_id .'/'. $shortname .') - '. $msg);
	}

	return( $output );
}



// Check if package is installed and activated
$ldpath = MODX_CORE_PATH.'components/'. $pak .'/model/';
if(!$modx->addPackage($pak, $ldpath, 'disqus_') || !$activated['plugin'] )
{
	return 'There was a problem adding the LudwigDisqus package!  Check the logs for more info!';

// Load needed lib API disqus-php
} elseif ($activated['seofriendly'] && $activated['manager']) {

		require_once($ldpath.'disqus-php/disqusapi/disqusapi.php');
	  	$disqus = new DisqusAPI( $api_key, 'json', '3.0' );

		// Clean Disqus by Identifier: Delete Threads with a Modx ID of 0 in Disqus and local
		//############################################################################
		$res = $modx->query("SELECT * FROM modx.disqus_thread t WHERE t.modx_id=0");
	  	if (is_object($res))
		{
			$data = $res->fetchAll(PDO::FETCH_ASSOC);
			foreach ($data as $d)
			{

				// Set Disqus fetch parameter
				$output = disqus_manage_threads($disqus, 'details', $d['id'], $access_token, $shortname);

				// Remove Thread in Disqus
				if ( is_object($output) && ($output->code == 0) )
				{
					// If Disqus remove this thread and delete it from DB
					$output = disqus_manage_threads($disqus, 'remove', $d['id'], $access_token, $shortname);
				}

			}
		}


		// Update Disqus by Identifier
		//############################################################################
		$res = $modx->query("SELECT id, modx_id FROM modx.disqus_thread t ");
	  	if (is_object($res))
		{
			$data = $res->fetchAll(PDO::FETCH_ASSOC);
			foreach ($data as $d)
			{
				// Set Disqus fetch parameter
				$params = array(	'access_token' => $access_token,
									'thread' => $d['id'],
									'url'	 => $modx->makeUrl($d['modx_id'],'','','full'),
									'forum'  => $shortname,
				);

				try {
					$output = $disqus->threads->update($params);

				} catch (Exception $e) {

					$msg = trim( $e->getMessage() );
					$modx->log(modX::LOG_LEVEL_ERROR, 'LudwigDisqus: Update ('. $d['id'] .'/'. $shortname .') - '. $msg);

					// Find thread by URL
					if ($msg == 'The link you provided is already in use by another thread.')
					{
						// Get Details by Link
						$output = disqus_manage_threads($disqus, 'details', 
														'link:'. $modx->makeUrl($d['modx_id'],'','','full'), 
														$access_token, $shortname);

						// If this link has 0 posts => rename link, close and delete thread
						if ( is_object($output) && ($output->code == 0) && ($output->response->posts === 0) )
						{

							// Set Disqus fetch parameter
							$params = array(	'access_token' => $access_token,
												'thread' => $output->response->id,
												'url'	 => $modx->makeUrl($d['modx_id'],'','','full') .'_old',
												'forum'  => $shortname,
							);
							$output = $disqus->threads->update($params);
							if ( is_object($output) && ($output->code == 0) )
							{
								$output = disqus_manage_threads($disqus, 'remove', $output->response->id, $access_token, $shortname);
							}
						}


					// Get more information about this thread
					} else {

						// Set Disqus fetch parameter
						disqus_manage_threads($disqus, 'details', $d['id'], $access_token, $shortname);

					}

				}
			}

		}
}