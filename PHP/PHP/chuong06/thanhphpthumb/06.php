<?php
    require_once 'library/ThumbLib.inc.php';
    // Tạo một biến filename là đường dẫn đến thư mục hình ảnh của chúng ta
    $filename = 'image/hocsinh.png';
    // Tạo ra một đối tượng gọi hàm create
    $thumb = PhpThumbFactory::create($filename);   
    
    $thumb->resize(300,300);
    // Lưu vào tập tin
    $thumb->save('img150/hocsinh.png');
    // Xem phần hình ảnh sau khi resize
    $thumb->show();
    
    
    
    
    
    
    