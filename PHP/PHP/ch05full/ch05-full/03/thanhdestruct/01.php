<?php
    session_start();
    require_once 'User.class.php';
    $Userasian = new User();
    
    echo '<h1> messi is the best player in the world <h1/>';
    echo '<pre>';
    print_r($Userasian);
    echo '</pre>';