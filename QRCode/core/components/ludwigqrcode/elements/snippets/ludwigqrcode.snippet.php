<?php
/**
 * LudwigQRcode
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigQRcode is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * LudwigQRcode is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigQRcode; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigqrcode
 */
/**
 * LudwigQRcode
 *
 * Create QR Codes in Modx
 *
 * @version 1.0
 * @author Thomas Ludwig <thomas@ludwig.im>
 * @copyright Copyright &copy; 2014
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version for ludwigqrcode and phpqrcode sourcecode
 * @package ludwigqrcode
 */

/*
Use: [[!ludwigqrcode? &txt=`Test` &with=`150`]]
*/

// Variables
$pak = 'ludwigqrcode';
$props =& $scriptProperties;
$output = '';
$tmp = array();

// After successfull installation there could be a problem with the properties:
// 1: That we want: array(2) { ["width"]=> string(3) "100" ["txt"]=> string(7) "QR Code" }
// 2: That we get: array(2) { [0]=> string(3) "100" [1]=> string(7) "QR Code" } 
var_dump( $modx->getOption('width', $props, false) );
if (array_key_exists('width', $props)) {
    var_dump( $props );
}
exit();

if ( !$modx->getOption('width', $props, false) )
{
	$chunk = $modx->getObject('modChunk', array('name' => 'qrcode'));
	$chunk->set('properties', $modx->fromJSON('[{"name":"width","desc":"","xtype":"numberfield","options":[],"value":"100","lexicon":"","overridden":false,"desc_trans":"","area":"","area_trans":"","menu":null},{"name":"txt","desc":"","xtype":"textfield","options":[],"value":"QR Code","lexicon":"","overridden":false,"desc_trans":"","area":"","area_trans":"","menu":null}]'));
	$chunk->save();
	unset($chunk);
	
	$chunk = $modx->getObject('modChunk', array('name' => 'qrcode'));
	var_dump( $chunk->getProperties() );
	unset($chunk);
	exit();
}

// Initial Default Parameter
$val= array(	'txt' => $modx->getOption('txt', $props, ''),	// Message
				'num' => $modx->getOption('num', $props, ''),	// Number (e.g. phone number)
				'type' => $modx->getOption('type', $props, 'notype'),
				'width' => $modx->getOption('width', $props, 100), // In pixel - false=auto
				'fore_color' => $modx->getOption('fcolor', $props, '0x000000'),
				'back_color' => $modx->getOption('bcolor', $props, 'transparent'),
				'size' => $modx->getOption('size', $props, false),
				'margin' => $modx->getOption('margin', $props, 4),
				'compress' => $modx->getOption('compress', $props, false),
				'saveToFile' => $modx->getOption('saveToFile', $props, false), // Full path or boolean false
				'imgtype' => 'svg',
				'id' => $modx->resource->get('id')
);

// Get type of QR Code
switch ($val['type']) 
{
    case 'link':
        $val['txt'] = "MEBKM:TITLE:". $modx->resource->get('pagetitle') .";URL:". $modx->makeUrl($val['id'],'','','full') .";";
        break;

	case 'bookmark':
        $val['txt'] = "MEBKM:TITLE:". $val['txt'] .";URL:". $modx->makeUrl($val['id'],'','','full') .";";
        break;

	case 'sms':
        $val['txt'] = 'smsto:'. $val['num'] .':'. $val['txt']; 
        break;

    case 'phone':
        $val['txt'] = 'tel:'. $val['num'];
        break;

	case 'skype':
		$val['txt'] = 'skype:'.urlencode($val['num']).'?call'; 
		break;

	case 'wifi':
		$tmp = explode("|", $val['txt']);
		if (count($tmp) == 4) 
		{
			$val['txt'] = 'WIFI:S:'. $tmp[0] .';T:'. $tmp[1] .';P:'. $tmp[2] .';H:'. (bool)$tmp[3] .';'; 

		} else if (count($tmp) == 3) {
			$val['txt'] = 'WIFI:S:'. $tmp[0] .';T:'. $tmp[1] .';P:'. $tmp[2] .';'; 

		} else if (count($tmp) == 2) {
			$val['txt'] = 'WIFI:S:'. $tmp[0] .';T:nopass;';

		} else {
			$val['txt'] = 'Please define "SSID|WEP/WPA/nopass|PASSWORD|HIDDEN Network?" to use Wifi';
		}
		$tmp = array();		
		break;

	case 'email':
		$tmp = explode("|", $val['txt']);
		if (count($tmp) == 3)
		{
			$tmp[0] = ( filter_var($tmp[0], FILTER_VALIDATE_EMAIL) ? $tmp[0] : 'max@mustermann.example' );	// Filter Email

			$val['txt'] = 'mailto:'. $tmp[0] .'?subject='.urlencode($tmp[1]).'&body='.urlencode($tmp[2]); 
		} else {
			$val['txt'] = 'Please define "max@mustermann.com|Subject|Message" to send an email';
		}
		$tmp = array();
		break;

	case 'mecard':
		$tmp = explode("|", $val['txt']);
		if (count($tmp) == 4)
		{
			$tmp[3] = ( filter_var($tmp[3], FILTER_VALIDATE_EMAIL) ? $tmp[3] : 'max@mustermann.example' );	// Filter Email
			$val['txt'] = "MECARD:N:". $tmp[0] .";ADR:". $tmp[1] .";TEL:". $tmp[2] .";EMAIL:". $tmp[3] .";";
		} else {
			$val['txt'] = 'Please define "Name|Address|Phone|Email" to use MeCards';
		}
		$tmp = array();
		break;

	case 'vcard':
		$val['txt'] = 'BEGIN:VCARD' ."\n". 'FN:'. $val['txt']  ."\n". 'TEL;WORK;VOICE:'. $val['num'] ."\n". 'END:VCARD';
		break;

	case 'geo':
		$tmp = explode("|", $val['txt']);

		// Select GoogleMaps
		if ( ($val['num'] == 'GoogleMaps') && (count($tmp) >= 2) ) 
		{
			$val['txt'] = 'http://maps.google.com/?q='. floatval($tmp[0]) .','. floatval($tmp[1]); 

		// Select OpenStreet
		} else if ( ($val['num'] == 'OpenStreet') && (count($tmp) == 3) ) {
			$val['txt'] = 'http://www.openstreetmap.org/?lat='. floatval($tmp[0]) .'&lon='. floatval($tmp[1]) .'&zoom='. intval($tmp[2]);

		// Standard GEO Link
		} else if (count($tmp) == 3) {
			$val['txt'] = 'geo:'. floatval($tmp[0]) .','. floatval($tmp[1]) .','. intval($tmp[2]); 

		} else {
			$val['txt'] = 'Please define "deg N latitude|deg W longitude|elevation" to use geo location';
		}

		$tmp = array();
		break;

	case 'playstore':
		$msg = 'Google play store uri, eg. org.example.app';
	  	$val['txt'] = "market://details?id=". $val['txt'];
        break;


    case 'notype':

	// Default is text
	default:
        break;
}

// Load needed lib API phpqrcode
require_once( $modx->config["core_path"] .'components/'. $pak .'/model/phpqrcode/lib/full/qrlib.php');

// Initial lib
$qr = new QRcode();
if (is_a($qr, 'QRcode'))
{

	// Generate SVG image
	if ( $val['imgtype'] === 'svg' )
	{
		// Generate SVG
		$val['saveToFile']= false;
		$output =  $qr->svg( $val['txt'], 
						$val['id'], 
						$val['saveToFile'], 
						QR_ECLEVEL_L, 
						$val['width'],
						$val['size'],
						$val['margin'],
						$val['compress'],
						$val['back_color'],
						$val['fore_color'] );
	}

	// Was it successfully?
	if($output != '')
	{

		// Generate QRCode on the fly
		if ( !$val['saveToFile'] )
		{
			return( base64_encode($output) );
		}

		// Receive a link where the image is cached
		return( $val['saveToFile'] );

	}
}

return( $output );