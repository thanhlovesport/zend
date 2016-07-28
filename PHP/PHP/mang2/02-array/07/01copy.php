<?php
    $course = array("messi","ronaldo","suares","Bale","messi");
    
    echo "<pre>";
    print_r($course);
    echo "</pre>";
        
    $newArray = array_unique($course);
    
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    
