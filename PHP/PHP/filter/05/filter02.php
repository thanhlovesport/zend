<?php
   /*  echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    if (!filter_input(INPUT_GET, 'email',FILTER_VALIDATE_EMAIL)){
        echo "email không hợp lệ";
    }else {
        echo "email hợp lệ";
    }