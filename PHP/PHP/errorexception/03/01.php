<?php
    $config = ini_get_all();
    /* echo '<pre>';
    print_r($config);
    echo '</pre>'; */
    
    echo $timezone = ini_get('date.timezone');
    
    ini_set('date.timezone', 'Asia/Ho_Chi_Minh');
    echo '<br/>'.$timezone = ini_get('date.timezone');