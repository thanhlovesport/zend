<?php
    session_start();
   
    /* echo '<pre>';
    print_r($_SESSION);
    echo '</pre>'; */
   $name = $_SESSION['name'];
   echo $name;