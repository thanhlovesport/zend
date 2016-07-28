<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// UPĐATE
	mysql_select_db('manager_user');
	
	function createUpdateSQL($data){
	   $newQuery = "";
	   // `name` = 'CR7', `status` = '10', `ordering` = '17'
	   if(!empty($data)){
	       foreach ($data as $key => $value){
	           $newQuery.= ", `$key` = '$value'";
	       }
	   }
	   $newQuery = substr($newQuery, 2);
	   return $newQuery;
	}
	$data = array('name'=> 'Lionel Messi','status'=>'15','ordering'=>'19');
	
    $newQuery = createUpdateSQL($data);
    $query = "UPDATE `group` SET ".$newQuery." WHERE `id` = 2 ";
    
    $result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	mysql_close($connect); 