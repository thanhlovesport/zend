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
	
	$data 	= array('status' => 1, 'ordering' => 16, 'name' => 'messi');
	$where	= array(
						array('status', 0, 'and'),
						array('ordering', 19,'and'),
				);
	
	echo $database->update($data, $where);
	
