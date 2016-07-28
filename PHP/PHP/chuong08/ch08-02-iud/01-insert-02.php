<?php
	$connect = @mysql_connect('localhost', 'root', '');
	
	if(!$connect) die('<h3>Fail</h3>');
	
	// INSERT
	mysql_select_db('manager_user');
	
	$arrData = array('name'=>'Member 1234', 'status' => 0, 'ordering' => 9);
	
	function createInsertSQL($data){
		$newQuery = array();
		$cols='';
		$vals='';
		if(!empty($data)){
			foreach($data as $key=> $value){
				$cols .= ", `$key`";
				$vals .= ", '$value'";
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		//$newQuery['cols'] = ltrim($cols,',');
		
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}
	
	
	
	$newQuery = createInsertSQL($arrData);
	echo '<pre>';
	print_r($newQuery);
	echo '</pre>';
	
	$query = "INSERT INTO `group`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";

	
	$result = mysql_query($query, $connect);
	
	if($result){
		echo $total = mysql_affected_rows();
	}else{
		echo mysql_error();
	}
	
	mysql_close($connect);