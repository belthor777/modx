<?php
/**
 * @package ludwigdisqus
 */
$xpdo_meta_map['Comment']= array (
  'package' => 'ludwigdisqus',
  'version' => '1.1',
  'table' => 'comment',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'thread_id' => NULL,
    'parent_id' => NULL,
    'like' => NULL,
    'dislike' => NULL,
    'isSpam' => 0,
    'isDeleted' => 0,
    'author_name' => NULL,
    'comment' => NULL,
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
    'thread_id' => 
    array (
      'dbtype' => 'bigint',
      'phptype' => 'integer',
      'null' => false,
    ),
    'parent_id' => 
    array (
      'dbtype' => 'bigint',
      'phptype' => 'integer',
      'null' => true,
    ),
    'like' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
    ),
    'dislike' => 
    array (
      'dbtype' => 'int',
      'phptype' => 'integer',
      'null' => false,
    ),
    'isSpam' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'isDeleted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'author_name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => true,
    ),
    'comment' => 
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
