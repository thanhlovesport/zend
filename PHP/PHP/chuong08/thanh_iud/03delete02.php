<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPĐATE
	mysql_select_db('manager_user');
	$query = "DELETE FROM `group` WHERE `id` = 3";
	$result = mysql_query($query);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect); 