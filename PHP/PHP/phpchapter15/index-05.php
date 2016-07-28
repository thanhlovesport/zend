<?php

require_once 'library/mpdf.php';

// CSS

$mpdf = new mPDF(
        'utf-8', 			// mode - default ''
        array(150,150),    	// format - A4, for example, default ''
        22,     			// font size - default 0
        'arial',			// default font family
        0,    				// margin_left
        0,    				// margin right
        0,     			    // margin top
        0,    				// margin bottom
        0,     			    // margin header
        9,     				// margin footer
        'P'  				// L - landscape, P - portrait
    );
    

// Tạo ra nội dung file : Theo kiểu HTML: dòng 1
$mpdf->SetXY(0, 0);
$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// Tạo ra nội dung file : Theo kiểu HTML: dòng 2
$mpdf->SetXY(0, 15);
$mpdf->WriteHTML('<h3 style="color:red"> Cristiano Ronaldid </h3>');

// Ghi văn bản thuần theo tọa độ do mình tự đặt

$mpdf->WriteText(30, 50, 'Thomas Eriksen');


// Xuất ra file pdf
$mpdf->Output();