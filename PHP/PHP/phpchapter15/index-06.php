<?php

require_once 'library/mpdf.php';

// Tạo ra nhiều trang

$mpdf = new mPDF(
        'utf-8', 			// mode - default ''
        array(150,150),    	// format - A4, for example, default ''
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
// Page 1
$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// Page 2
$mpdf->AddPage();
$mpdf->WriteHTML('<h3 style="color:green"> Cristiano Ronaldid </h3>');

// Page 3
$mpdf->AddPage();
$mpdf->WriteHTML('<h3 style="color:green">Eriksen </h3>');



// Xuất ra file pdf
$mpdf->Output();