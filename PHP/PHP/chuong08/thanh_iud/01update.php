<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPĐATE
	mysql_select_db('manager_user');
	
    $query = "UPDATE `group` SET `name` = 'CR7', `status` = '10', `ordering` = '17'
	               WHERE `id` = 5";
	$result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect);