<?php
/**
 * @package ludwigdisqus
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/comment.class.php');
class Comment_mysql extends Comment {}
?>