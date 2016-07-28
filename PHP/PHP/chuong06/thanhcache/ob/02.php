<?php

    function callback($buffer){ // tham số ở trong là những dữ liệu được lưu trong bộ nhớ đệm
        return  str_replace("PHP", "Zend", $buffer);
    }
// Bật lên bộ nhớ đệm
    ob_start("callback");
?>
 <!-- Phần mã nguồn bên dưới trước khi chạy sẽ được lưu vào bộ nhớ đệm -->
<html>
    <body>
        <h1> PHP is a programming language</h1>
    </body>
</html>
<?php 
    // Tắt bộ nhớ đệm
    ob_end_flush();
?>