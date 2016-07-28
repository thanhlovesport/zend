<?php
    require_once 'library/class.phpmailer.php';
    // khởi tạo một đối tượng 
    $mail = new PHPMailer();
    // Thiết lập thông tin người gửi và email người gửi
    $mail->setFrom('phamngocthanh3009@gmail.com','Thanh');
    
    // Thiết lập thông tin người nhận và email người nhận
    $mail->addAddress('pntbmws1000rr@gmail.com','Thanh khung');
    // Tiếp tục thêm tài khoản người nhận được mail
    $mail->addAddress('nhocconkuter@gmail.com');
    
    
    // Thiết lập phần tiêu đề
    $mail->Subject = "PHP mailer";
    
    // Thiết lập charset
    $mail->CharSet = 'utf-8';
    
    // Thiết lập nội dung mail
    $mail->Body = "Thành nhỏ học lại môn web";
    
    // Tiến hành việc gửi mail
   if ($mail->send()==FALSE){
       echo 'Error: '.$mail->ErrorInfo;
   }else {
       echo 'Success';
   }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* echo '<pre>';
    print_r($mail);
    echo '</pre>'; */