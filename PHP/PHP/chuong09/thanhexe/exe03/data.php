<?php
	require_once 'class/Database.class.php';
	$params = array(
						'server'	=> 'localhost',
						'username'	=> 'root',
						'password'	=> '',
						'database'	=> 'manager_user',
						'table'		=> 'news',
				);
	
	
	$database 	= new Database($params); // tao params xong roi lay cac tin tuc co trong bang news (CSDL)
	$position	= $_GET['position']; // lay tu file index qua (vi tri thu 0)
	$item		= $_GET['item'];
	$query	 	= "SELECT `id`, `title`, `description` FROM news LIMIT $position, $item";
	$list		= $database->listRecord($query); // danh sach cac tin tuc trong bang news (o dang mang)
	
	$xhtml = '';
	if(!empty($list)){
		foreach($list as $key => $value){
			$xhtml .= '<div class="item">
							<h3>'.$value['title'].'</h3>
							<p>'.$value['description'].'</p>
						</div>';
		}
	}
	echo $xhtml;
	