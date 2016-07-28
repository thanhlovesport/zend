<?php
	require_once 'Database.class.php';
	
	$params		= array(
						'server' 	=> 'localhost',
						'username'	=> 'root',
						'password'	=> '',
						'database'	=> 'manager_user',
						'table'		=> 'group',
					);
	
	$database = new Database($params);
	
	$arrData = array('name'=>'Vardy', 'status' => 1, 'ordering' => 9);
	
	echo $lastID = $database->insert($arrData);
	
