<?php
// Bật lên bộ nhớ đệm
    ob_start();
?>
<html>
    <body>
        <h1> PHP is a programming language</h1>
    </body>
</html>
<?php 
    // Tắt bộ nhớ đệm
    ob_end_flush();
?>