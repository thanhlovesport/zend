<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
	
	$query[] 	= "SELECT * ";
	$query[] 	= "FROM `group`";
	$query[] 	= "ORDER BY `ordering` DESC";
	$query		= implode(" ", $query);
	
	
    $database->query($query);  // Trả về thuộc tính resultquery để gán thuộc tính này trong hàm single record
    
	$list = $database->singleRecord(); // Ở trong không có tham số result query gán cho nó thuộc tính result query

	echo '<pre>';
	print_r($list);
	echo '</pre>';
	
