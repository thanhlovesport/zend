<?php
	session_start();

	if($_POST['captcha'] == $_SESSION['code']) {
		echo 'Success';
	}else{
		echo 'Fail';
	}
	
	/* echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	
	echo '<pre>';
	print_r($_SESSION);
	echo '</pre>'; */