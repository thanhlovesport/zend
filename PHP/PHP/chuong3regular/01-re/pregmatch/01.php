<?php
    $subject = 'My game so big';
    $pattern = '/game/';
    if (preg_match($pattern, $subject,$match)== true) {
        echo "Tim thay chuoi";
    }
    else 
        echo "Khong tim thay chuoi";
    echo "<pre>";
    print_r($match);
    echo "</pre>";
?>