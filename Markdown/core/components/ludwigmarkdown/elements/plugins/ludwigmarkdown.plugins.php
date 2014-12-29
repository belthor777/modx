<?php
/**
 * ludwigmarkdown
 * Copyright 2015 by Thomas Ludwig <thomas@ludwig.im>
 *
 * ludwigmarkdown is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * ludwigmarkdown is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ludwigmarkdown; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigmarkdown
 */
/**
 * ludwigmarkdown
 *
 * Convert Markdown to HTML5
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2015
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigmarkdown sourcecode
 * @package ludwigmarkdown
 **/
$PKG_NAME= 'LudwigMarkdown';
$PKG_NAME_LOWER= strtolower($PKG_NAME);
$PKG_EVENT= "OnWebPagePrerender";

$e = &$modx->Event;
if ($e->name == $PKG_EVENT)
{
	// Check if the Extra is enabled
	$activated = array(	'extra' => $modx->getOption( $PKG_NAME_LOWER .'.activated'),
								'syntaxhighlight' => $modx->getOption( $PKG_NAME_LOWER .'.syntaxhighlight_enabled'),
								'use_pandoc' => $modx->getOption( $PKG_NAME_LOWER .'.use_pandoc'),
					);

	// Check if package is installed and activated
	$ldpath = MODX_CORE_PATH.'components/'. $PKG_NAME_LOWER .'/model/';
	if(!$modx->loadClass($PKG_NAME, $ldpath, true, true) || !$activated['extra'] )
	{
		return('There was a problem adding the '. $PKG_NAME .' package!  Check the logs for more info!' );

	} else {

		// Get Content
		$output= $modx->resource->_output;

		// Select Parser
		$lm = new LudwigMarkdown($modx);
		if ($activated['use_pandoc'])
		{
			$output= $lm->generate_pandoc( $output );

		// Use PHP-Markdown
		} else {

			$output= $lm->generate_phpmarkdown( $output );
		}

		// Use Syntax Highlighter Geshi?
		if ($activated['syntaxhighlight'])
		{
			$output= $lm->generate_geshi( $output );
		}

		$modx->resource->_output= $output;
	}
}

return('');