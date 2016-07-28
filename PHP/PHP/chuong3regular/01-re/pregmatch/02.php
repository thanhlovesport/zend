<?php
    $subject = 'My game game so big';
    $pattern = '/game/';
    if (preg_match_all($pattern, $subject,$match)== true) {
        echo "Tim thay chuoi";
    }
    else 
        echo "Khong tim thay chuoi";
    echo "<pre>";
    print_r($match);
    echo "</pre>";
?>