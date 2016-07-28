<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect();
   /*  
    echo '<pre>';
    print_r($detect);
    echo '</pre>'; */
    
    // Any mobile device (phones or tablets).
    /* if ( $detect->isMobile() ) {
        echo 'Phone';
    }
    
    // Any tablet device.
    if( $detect->isTablet() ){
        echo 'Table';
    }
     */
    // Biết chính xác thiết bị truy cập
    echo $device = ($detect->isMobile()) ? ($detect->isTablet() ? 'tablet' : 'phone') : 'Computer';
    if ($device == 'tablet'){
        // Load template for table
    }else if($device=='phone') {
        //Load template for phone
    }else {
        //Load template for computer
    }
    
    if( $detect->isiOS() ){
        echo 'Thiết bị đang chạy trên hệ điều hành IOS';
    }
    if( $detect->isAndroidOS() ){
        echo 'Thiết bị đang chạy trên hệ điều hành Android';
    }