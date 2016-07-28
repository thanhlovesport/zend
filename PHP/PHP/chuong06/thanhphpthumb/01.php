<?php
    require_once 'library/ThumbLib.inc.php';
    // Tạo một biến filename là đường dẫn đến thư mục hình ảnh của chúng ta
    $filename = 'image/hocsinh.png';
    // Tạo ra một đối tượng gọi hàm create
    $thumb = PhpThumbFactory::create($filename);   
    // thay đổi kích thước của hình ảnh
    $thumb->resize(600,600);
    // Xem phần hình ảnh sau khi resize
    $thumb->show();
    
    
    
    
    
    
     /* echo '<pre>';
    print_r($thumb);
    echo '</pre>'; */