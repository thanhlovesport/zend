<?php
	session_start();
    /* require_once 'User.class.php';
    $Userasian = new User(); */
   /*  echo '<pre>';
    print_r($_SESSION);
    echo '</pre>'; */
    // Kiểm tra phần tử session UserA tồn tại
    if (isset($_SESSION['Userasian'])){
        $Userasian = unserialize($_SESSION['Userasian']);
        echo '<pre>';
        print_r($Userasian);
        echo '</pre>';
    }
?>
