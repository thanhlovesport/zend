<?php
	require_once 'class/Database.class.php';
	$params		= array(
			'server' 	=> 'localhost',
			'username'	=> 'root',
			'password'	=> '',
			'database'	=> 'manager_user',
			'table'		=> 'user',
	);
	$database = new Database($params);