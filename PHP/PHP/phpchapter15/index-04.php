<?php

require_once 'library/mpdf.php';

// CSS

$mpdf = new mPDF(
        'utf-8', 			// mode - default ''
        array(150,150),    	// format - A4, for example, default ''
        22,     			// font size - default 0
        'arial',			// default font family
        15,    				// margin_left
        15,    				// margin right
        15,     			// margin top
        16,    				// margin bottom
        0,     			    // margin header
        9,     				// margin footer
        'P'  				// L - landscape, P - portrait
    );
    
$styleSheet = file_get_contents('css/style.css');

// Ghi nội dung css vô tập tin pdf
$mpdf->WriteHTML($styleSheet,1);

// Set header
$mpdf->SetHTMLHeader('<p class="header">David Silva</p>');

// Tạo ra nội dung file : Theo kiểu HTML
$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// Set Footer
$mpdf->SetHTMLFooter('<p class="footer">Marco Reus</p>');


// Xuất ra file pdf
$mpdf->Output();