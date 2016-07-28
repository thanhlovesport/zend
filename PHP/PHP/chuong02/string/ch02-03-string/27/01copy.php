<?php 
    $str = "Luka <b>Modric</b> is a best player";
    echo "Input"." ". $str ."<br/>";
    echo "Output". " ". htmlspecialchars($str);
    echo "<br/>";
    echo "Output". " ". htmlspecialchars_decode($str);
?>
