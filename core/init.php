<?php

session_start();

//globals to prevent redundancy
/*$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => '',
		'password' => '',
		'db' => ''));
	/*add session array if we need to use $_SESSION variables later on
	
	 'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'));
*/

//use of autoload for OOP if needed for dynamic functionality
spl_autoload_register(function($class) {require_once 'classes/'.$class.'.php';} );

//load static html chunks
require_once 'functions/static.php';

?>