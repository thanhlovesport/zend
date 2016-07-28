<?php
    $varialbe = 'this is a string';
    session_start();
    
    $_SESSION['varialbe'] = $varialbe;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';