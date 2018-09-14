<?php
//require __DIR__.'vendor/autoload.php'; // Require autoload composer

$page   = isset($_GET['page']) ? $_GET['page'] : false;
$method = isset($_GET['method']) ? $_GET['method'] : false;

function autoload($class)
{
	include 'src/'.$class.'.php';
}

spl_autoload_register('autoload');

$hasil = null;
$error = null;

if ($page) {
	$class    = ucwords($page);
	$instance = new $class;

	$args = [];

	if ($method == 'submit') {
		call_user_func_array([$instance, 'submit'], $args);
		$hasil = $instance->getHasil();
		$error = $instance->error;
	} 
}

include 'view/home.php';