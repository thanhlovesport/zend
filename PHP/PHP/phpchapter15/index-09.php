<?php

require_once 'library/mpdf.php';

// Tạo bảo mật cho file  bằng watermark     

$mpdf = new mPDF(
        'utf-8', 			// mode - default ''
        'A4',    	// format - A4, for example, default ''
        22,     			// font size - default 0
        'arial',			// default font family
        0,    				// margin_left
        0,    				// margin right
        0,     			// margin top
        0,    				// margin bottom
        0,     			    // margin header
        9,     				// margin footer
        'P'  				// L - landscape, P - portrait
    );
    

// Tạo ra nội dung file : Theo kiểu HTML

$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// 

// Tham số thứ 2 là góc nghiêm, thứ 4 là độ đậm, nhạt của từ
// watermark là chữ
//$mpdf->watermark('David Silva',45,20,0.6);

// watermark là số

// Tham số thứ 2 là độ trong suốt
$mpdf->watermarkImg('images/thanhkhung.png',100);



// Xuất ra file pdf // Lưu đường dẫn, tên file, tùy chọn
$mpdf->Output('files/abcd.pdf',F); // D: Lập tức download   I: Hiển thị nội dung file padf ra trình duyệt   F: tạo ra file đường dẫn nơi lưu là tham số thứ nhất






















