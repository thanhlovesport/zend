<?php
// In ra biến Post
    if (isset($_POST['imagesrc'])){
        $imageName = $_POST['imagesrc'];
        
        // 125x125
        $fileName = $imageName;
        unlink($fileName);
        
        // 125x450
        $fileName4 = str_replace('125-', '450-', $imageName);
        unlink($fileName4);
        
        // Main
        $imageNamem = str_replace('125-', '', $imageName);
        unlink($imageNamem);
    }