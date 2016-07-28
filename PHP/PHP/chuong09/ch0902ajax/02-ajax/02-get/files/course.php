<?php
	$course = array();
	$course[0] = array('id' => 1, 'name' => 'Zend Framwork');
	$course[1] = array('id' => 2, 'name' => 'Joomla');
	$course[2] = array('id' => 3, 'name' => 'PHP');
	
	if(isset($_GET['id'])){
	    foreach($course as $key=>$value){
	        if($value['id'] == $_GET['id']){
	            echo $value['name'];
	            break;
	        }
	    }
	}
	
	if(isset($_GET['key'])){
        
	   /*  $result = $course[$_GET['key']];
	    echo $result['id'].'-'.$result['name']; */
	    
		$result = $course[$_GET['key']];
		echo json_encode($result);
	}
?>