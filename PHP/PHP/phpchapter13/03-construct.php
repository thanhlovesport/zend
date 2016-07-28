<?php
// Construct được gọi tự động và gọi đầu tiên khi một đối tượng được khởi tạo
// Destruct phương thức được gọi tự động, phương thức gọi cuối cùng, thực thi ở cuối trang
    require_once 'class/Teacher.class.php';
    $arrInfo = array('magv'=>'GameLoft','tengv'=>'ChungJuJung','ngaysinh'=>'15/02/1995');
    $teacher3 = new Teacher($arrInfo);
    
    
    echo '<pre>';
    print_r($teacher3);
    echo '</pre>';
