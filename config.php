<?php
/*
    date_default_timezone_set('America/New_York'); 
	$currentCookieParams = session_get_cookie_params(); 
	$rootDomain = '*.filmpact.me'; 
    error_reporting(E_ALL-E_WARNING-E_NOTICE);
	session_set_cookie_params( 
	    $currentCookieParams["lifetime"], 
	    $currentCookieParams["path"], 
	    $rootDomain, 
	    $currentCookieParams["secure"], 
	    $currentCookieParams["httponly"] 
	); 

	session_name('filmpact.me');
	*/
	@session_start();
	$config['db_host'] = "68.178.143.47";
	$config['db_user'] = "filmpact";
	$config['db_pass'] = "Filmpact14!";
	$config['db_name'] = "filmpact";

	mysql_connect($config['db_host'], $config['db_user'], $config['db_pass'])or die(mysql_error()); 
    mysql_select_db($config['db_name'])or die(mysql_error());

    include_once("functions.php");