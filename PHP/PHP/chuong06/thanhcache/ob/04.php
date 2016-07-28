<?php
    ob_start();
    echo $abc = '<html>
    <body>
        <h1> PHP is a programming language</h1>
    </body>
</html>';
    // Xóa toàn bộ thông tin trong bộ nhớ đệm
    //ob_clean();
    // Lấy thông tin của bộ nhớ đệm
    $data = ob_get_contents();
    ob_clean();
   
?>

<?php 
    // Tắt bộ nhớ đệm
    ob_end_flush();
    echo $data;
?>