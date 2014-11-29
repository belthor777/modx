<?php
/**
 * @package ludwigdisqus
 * @subpackage build
 */
$tvs = array();

$i= 0;
$tvs[$i] = $modx->newObject('modTemplateVar');
$tvs[$i]->fromArray(array(
    'name'              => 'disqus',
    'caption'           => 'Disqus',
    'description'       => 'Disqus helps you build a community of active readers and commenters.',
    'type'              => 'listbox',
    'elements'          => 'No==0||Yes==1',
    'default_text'      => '0',
    'input_properties'   => array(
		'allowBlank'    => false,
	        'typeAhead'     => false,
	        'typeAheadDelay'=> 250,
	        'forceSelection'=> 250,
	        'listEmptyText' => '',
    ),
    'output_properties' => array(),
    'rank'              => 20
));

return $tvs;
