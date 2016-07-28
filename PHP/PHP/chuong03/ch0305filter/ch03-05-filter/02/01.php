<?php
	$x = "on";	// 1, true, on
	
	if(!filter_var($x, FILTER_VALIDATE_BOOLEAN)){  // Cái này đúng
		echo "<br /> $x - khong la kieu Boolean";
	}else{
		echo "<br /> $x - la kieu Boolean";
	}