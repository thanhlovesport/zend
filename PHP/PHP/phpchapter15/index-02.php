<?php

require_once 'library/mpdf.php';

$mpdf = new mPDF(
        'utf-8', 			// mode - default ''
        array(150,150),    	// format - A4, for example, default ''
        22,     			// font size - default 0
        'arial',			// default font family
        15,    				// margin_left
        15,    				// margin right
        15,     				// margin top
        16,    				// margin bottom
        0,     			// margin header
        9,     				// margin footer
        'P'  				// L - landscape, P - portrait
    );

// Tạo ra nội dung file : Theo kiểu text

$mpdf->SetHTMLHeader('<p> FC Liverpool </p>');

// Tạo ra nội dung file : Theo kiểu HTML
$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// Xuất ra file pdf
$mpdf->Output();