<?php
    require_once 'library/class.phpmailer.php';
    // khởi tạo một đối tượng 
    $mail = new PHPMailer();
    // Gọi đến lớp xử lí của SMTP
    $mail->isSMTP();
    
    $mail->SMTPDebug = 1; // Hiển thị thông báo trong quá trình kết nối đến SMTP
                          // 1: hiển thị message và error, 2: hiện thị message
    //Khai báo phần giá trị để kết nối với SMTP
    $mail->SMTPAuth = true; // phần đăng nhập
    $mail->Host = 'mail.google.com';
    $mail->Port = 25;
    $mail->Username='thanhlovenatural@gmail.com';
    $mail->Password='nhoccondethuong';
    
    
    
    // Thiết lập thông tin người gửi và email người gửi
    $mail->setFrom('thanhlovenatural@gmail.com','Thanh');
    
    // Thiết lập thông tin người nhận và email người nhận
    $mail->addAddress('phamngocthanh3009@gmail.com','NgocThanh');
    // Tiếp tục thêm tài khoản người nhận được mail
   // $mail->addAddress('nhocconkuter@gmail.com');
    
    
    // Thiết lập phần tiêu đề
    $mail->Subject = "PHP mailer";
    
    // Thiết lập charset
    $mail->CharSet = 'utf-8';
    
    // Thiết lập nội dung mail
    $body = "Thành nhỏ học lại môn <b>web<b/>";
    //$mail->Body = $body;
    $mail->msgHTML($body);
    
    // Tiến hành việc gửi mail
   if ($mail->send()==FALSE){
       echo 'Error: '.$mail->ErrorInfo;
   }else {
       echo 'Success';
   }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /* echo '<pre>';
    print_r($mail);
    echo '</pre>'; */