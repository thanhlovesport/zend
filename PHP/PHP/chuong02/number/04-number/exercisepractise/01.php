<?php
    require_once 'fraction.php';
    /*
     * Cac buoc toi gian
     * 01 lay phan so
     * 02 tim UCLN
     * 03 Chia tu va mau cho UCLN
     * 04 Phan so moi la phan so toi gian
     */
    $fraction = "18/8";
    
    //echo $uocchunglonnhat;
    $result = optimizeFraction($fraction);
    echo $result = implode("/", $result);