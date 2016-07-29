<?php

    // Chú ý, nếu đưa phần hiển thị text vào sẽ bị lỗi
    require_once 'library/ThumbLib.inc.php';
    // Tạo một biến filename là đường dẫn đến thư mục hình ảnh của chúng ta
    $filename = 'image/hocsinh.png';
    // Tạo ra một đối tượng gọi hàm create
    $thumb = PhpThumbFactory::create($filename);   
    // thay đổi kích thước của hình ảnh theo chiều dài, rộng tính từ tâm hình ảnh
    $thumb->adaptiveResize(400, 200);
    // Xem phần hình ảnh sau khi resize
    $thumb->show();
    
    
    
    
    
    
    