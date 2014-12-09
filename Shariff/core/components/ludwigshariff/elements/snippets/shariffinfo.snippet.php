<?php
/**
 * ShariffInfo
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * Shariff is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Shariff is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Shariff; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigshariff
 * @subpackage snippet
 *
 * @author      Thomas Ludwig (thomas@ludwig.im)
 * @copyright   Copyright 2014, Thomas Ludwig
 * @version     1.0.0
 */
$pkg= "ludwigshariff";

// Is this Extra activated?
if ($modx->getOption( $pkg .'.activated', null, false, true ))
{

	// Check Parameters and set them to default values
	$chunk= $modx->getOption('tpl', $scriptProperties, "shariffinfo");	// Chunk
	$tv_name= $modx->getOption('tv', $scriptProperties, "LudwigShariff");	// Template Variable
	$tv_json= $modx->resource->getTVValue($tv_name); // Get JSON

	// Generate Output
	$tv_ary= $modx->fromJSON($tv_json);
	if ( is_array($tv_ary) )
	{
		return( $modx->getChunk($chunk, $modx->fromJSON($tv_json) ) );
	}

}

return('');