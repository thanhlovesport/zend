
<?php 
	session_start();
    header('Content-type:  image/jpeg');
	echo $_SESSION['image']['data'];
	/* echo '<pre>';
	print_r($_SESSION['image']['info']);
	echo '</pre>'; */