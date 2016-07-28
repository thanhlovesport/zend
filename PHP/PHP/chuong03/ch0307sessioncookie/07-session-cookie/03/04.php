<?php
	session_start();

	if(isset($_SESSION['age'])){
		echo 'Ton tai';
	}else{
		echo 'Chua Ton tai';
	}
	echo "<br/>";
	if(isset($_SESSION['sex'])){
	    echo 'Tồn tại';
	}else{
	    echo 'Chưa tồn tại';
	}

