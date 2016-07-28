<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	mysql_select_db('manager_user');
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");
    
	// muốn lấy tất cả các bảng trong dữ liệu ta gõ vào
	// ... ?id=200OR'a'='a'
	
	$id = $_GET['id'];
	// Kiểm tra dữ liệu nhập vào phải là số nguyên vậy khi hacker gõ 'a'='a' mới không
	// lấy dữ liệu được
	if(is_numeric($id)){
		$query	= "SELECT * FROM `group` WHERE `id` = '$id'";
	
		$result = @mysql_query($query);
		while($row = mysql_fetch_assoc($result)){
			echo '<pre>';
			print_r($row);
			echo '</pre>';
		}
	}
	mysql_close($connect);
?>            


	
	
	
	
	
	