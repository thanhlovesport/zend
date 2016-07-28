<?php

    // Chú ý, nếu đưa phần hiển thị text vào sẽ bị lỗi
    require_once 'library/ThumbLib.inc.php';
    // Tạo một biến filename là đường dẫn đến thư mục hình ảnh của chúng ta
    $filename = 'image/hocsinh.png';
    // Tạo ra một đối tượng gọi hàm create
    $thumb = PhpThumbFactory::create($filename);   
    // Xoay hình ảnh CW là bên trái CVV là bên phải
    //$thumb->rotateImage('CVV');
    // Xoay hình ảnh theo độ
    $thumb->rotateImageNDegrees(30);
    // Xem phần hình ảnh sau khi resize
    $thumb->show();
    
    
    
    
    
    
    