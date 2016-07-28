<?php
	// Kết nối
	$connect = @mysql_connect('localhost', 'root', '');
	
	// Kiểm tra kết nối
	if(!$connect){
		die('<h3>Fail</h3>');
	}
	
	echo '<h3>Success</h3>';
	
	// Chọn database
	mysql_select_db('manage_user', $connect);
	
	
	// Đóng kết nối
	mysql_close($connect);
	
	
	/* $connectt = mysql_connect('localhost','root','');
	if(!$connect){
	    die('Kết nối không được');
	}else{
	    echo 'Success';
	}
	
	$db = mysql_select_db('sql_qlct',$connect);
	$query = "SELECT * FROM $db";
	$result = mysql_query($query);
	
	while($row = mysql_fetch_object($result)){
	    echo $row->'name';
	} */