<?php
	define("SCHEME_FOLDER", dirname(__FILE__)."/../data/scheme/");

	function my_autoloader($class) {
	    $parts = explode('\\', $class);
	    require end($parts) . '.php';
	}
	spl_autoload_register('my_autoloader');
?>