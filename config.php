<?php
require 'environment.php';
//constante
define("BASE", "http://localhost/clientes/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'clientes';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'clientes';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>