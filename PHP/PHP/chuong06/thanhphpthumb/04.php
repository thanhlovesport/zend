<?php

    // Chú ý, nếu đưa phần hiển thị text vào sẽ bị lỗi
    require_once 'library/ThumbLib.inc.php';
    // Tạo một biến filename là đường dẫn đến thư mục hình ảnh của chúng ta
    $filename = 'image/hocsinh.png';
    // Tạo ra một đối tượng gọi hàm create
    $thumb = PhpThumbFactory::create($filename);   
    // lấy hình ảnh từ tâm đến trên dưới, trái phải 200 px
    //$thumb->cropFromCenter(200);
    // tính từ tâm lấy rộng 200, dài 300
   // $thumb->cropFromCenter(200,300);
   $thumb->crop(0, 0, 400, 300);
    // Xem phần hình ảnh sau khi resize
    $thumb->show();
    
    
    
    
    
    
    