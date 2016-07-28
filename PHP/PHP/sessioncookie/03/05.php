<?php
    session_start();
    if (isset($_SESSION['age'])){
        $_SESSION['age']= 30;
    }else {
        $_SESSION['age']= 20;
    }
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';