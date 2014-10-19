<?php
/**
 * @package ludwigdisqus
 */
$xpdo_meta_map['Thread']= array (
  'package' => 'ludwigdisqus',
  'version' => '1.1',
  'table' => 'thread',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'modx_id' => NULL,
    'title' => NULL,
    'created' => NULL,
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'bigint',
      'phptype' => 'integer',
      'null' => false,
    ),
    'modx_id' => 
    array (
      'dbtype' => 'bigint',
      'phptype' => 'integer',
      'null' => false,
    ),
    'title' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'created' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => true,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'columns' => 
      array (
        'id' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
);
