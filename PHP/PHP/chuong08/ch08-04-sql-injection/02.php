<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	mysql_select_db('manager_user');
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");

	echo $id = $_GET['id'];
	// Hàm này khắc phục lỗi sql injection
	echo '<br />' .$id = mysql_real_escape_string($id);
	
	echo $query	= "SELECT * FROM `group` WHERE `id` = '$id'";

	$result = @mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		echo '<pre>';
		print_r($row);
		echo '</pre>';
	}

	mysql_close($connect);
?>            


	
	
	
	
	
	