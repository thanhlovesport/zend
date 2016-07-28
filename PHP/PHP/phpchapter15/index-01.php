<?php

require_once 'library/mpdf.php';
$mpdf = new mPDF();

// Tạo ra nội dung file : Theo kiểu text
$mpdf->WriteHTML('Thành Xấu Chai');

// Tạo ra nội dung file : Theo kiểu HTML
$mpdf->WriteHTML('<h3 style="color:green"> Lionel Messhit </h3>');

// Xuất ra file pdf
$mpdf->Output();