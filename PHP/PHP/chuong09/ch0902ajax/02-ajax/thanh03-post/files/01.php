<?php
	$course = array();
	$course[0] = array('id' => 1, 'name' => 'Zend Framwork');
	$course[1] = array('id' => 2, 'name' => 'Joomla');
	$course[2] = array('id' => 3, 'name' => 'PHP');
	
	/* echo '<pre>';
	print_r($_POST);
	echo '</pre>'; */
	
	if (isset($_POST['key'])){
	   // return $course[$_POST['key']]; // o day phan tu do la course 2
	  /*  echo '<pre>';
	   print_r($course[$_POST['key']]);
	   echo '</pre>'; */
	   // chuyen mang thanh mot doi tuong o javascript, o day la mot chuoi
	   $result = $course[$_POST['key']];
	   echo json_encode($result);
	   
	}
?>