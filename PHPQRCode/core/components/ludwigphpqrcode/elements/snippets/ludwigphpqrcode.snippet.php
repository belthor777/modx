<?php
/**
 * LudwigPHPQRCODE
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigPHPQRCODE is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigPHPQRCODE is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigPHPQRCODE; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigphpqrcode
 */
/**
 * LudwigPHPQRCODE
 *
 * Create QR Codes in Modx
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigphpqrcode and phpqrcode sourcecode
 * @package ludwigphpqrcode
 */

/*
Use: [[!ludwigphpqrcode? &txt=`Test` &id=`1234` &with=`150`]]
*/

// Variables
$pak = 'ludwigphpqrcode';
$activated = $modx->getOption( $pak .'.activated');
$props =& $scriptProperties;

// Initial Default Parameter
$val= array();
$val['txt'] = $modx->getOption('txt', $props, 'test');
$val['id'] = $modx->getOption('id', $props,  'noid');
$val['width'] = $modx->getOption('width', $props, false); // In pixel - false=auto
$val['fore_color'] = $modx->getOption('fcolor', $props, '0x000000');
$val['back_color'] = $modx->getOption('bcolor', $props, 'transparent');
$val['size'] = $modx->getOption('size', $props, false);	
$val['margin'] = $modx->getOption('margin', $props, 4);	
$val['compress'] = $modx->getOption('compress', $props, false);		
$val['saveToFile'] = $modx->getOption('saveToFile', $props, false);	// Full path or boolean false
$val['imgtype'] = 'svg';


// Generate SVG image
if ( $val['imgtype'] === 'svg' && $activated )
{
	// Load needed lib API phpqrcode
	require_once( $modx->config["base_path"] .'components/'. $pak .'/model/phpqrcode/lib/full/qrlib.php');			

	// Initial lib
	$qr = new QRcode(); 

	// Generate SVG
	$svgCode =  $qr->svg( $val['txt'], 
					$val['id'], 
					$val['saveToFile'], 
					QR_ECLEVEL_L, 
					$val['width'],
					$val['size'],
					$val['margin'],
					$val['compress'],
					$val['back_color'],
					$val['fore_color']	
	);
		
	if ( !$val['saveToFile'] )
	{
		return( base64_encode($svgCode) );

	} else {

		return( $val['saveToFile'] );

	}	

}
