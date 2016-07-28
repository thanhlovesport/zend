<?php
	 $connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// DELTE
	mysql_select_db('manager_user');
	
	$ids = array(4, 9);
	$deleteID = '';
	foreach($ids as $id) {
		$deleteID .= "'" . $id . "', ";  
	}
	$deleteID .= "'0'";
	
	$query 	= "DELETE FROM `group` WHERE `id` IN ($deleteID)";
	$result = mysql_query($query);
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	
	
	mysql_close($connect); 

   /*  $connect = mysql_connect('localhost','root','');
    if(!$connect){
        die('<h3>Error</h3>');
    }
    
    mysql_select_db('manager_user',$connect);
    
    $ids = array(4,8);
    $deleteid = '';
    foreach ($ids as $id){
        $deleteid   .=   "'".$id."',";
    }
    $deleteid .= "'0'";
    echo $sql = "DELETE FROM `group` WHERE `id` IN ($deleteid)";
    $result = mysql_query($sql,$connect);
    if($result){
        echo $total = mysql_fetch_row();
    }else{
        echo mysql_error();
    }
    
    mysql_close($connect); */
    
    
    
    
    
    
    
    
    