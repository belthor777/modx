<?php
/**
 * @package ludwigdisqus
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/thread.class.php');
class Thread_mysql extends Thread {}
?>