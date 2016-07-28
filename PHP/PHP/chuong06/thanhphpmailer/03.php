<?php
	require_once 'library/class.phpmailer.php';
	
	$mail = new PHPMailer();
	
	// Gá»�i Ä‘áº¿n lá»›p SMTP
	$mail->IsSMTP();
	
	$mail->SMTPDebug	= 1; 	// Hiá»ƒn thá»‹ thÃ´ng bÃ¡o trong quÃ¡ trÃ¬nh káº¿t ná»‘i SMTP
								// 1 = Hiá»ƒn thá»‹ message + error
								// 2 = Hiá»ƒn thá»‹ message
	
	$mail->SMTPAuth		= true;
	$mail->SMTPSecure	= 'ssl';
	$mail->Host			= 'smtp.gmail.com';
	$mail->Port			= 465;
	$mail->Username		= 'thanhlovenatural@gmail.com';	
	$mail->Password		= 'nhoccondethuong';
	
	// Thiáº¿t láº­p thÃ´ng tin ngÆ°á»�i gá»­i vÃ  email ngÆ°á»�i gá»­i
	$mail->SetFrom('thanhlovenatural@gmail.com', 'PHP online - ZendVN - 03');
	
	// Thiáº¿t láº­p thÃ´ng tin ngÆ°á»�i nháº­n vÃ  email ngÆ°á»�i nháº­n
	$mail->AddAddress('phamngocthanh3009@gmail.com', 'Ngoc Thanh');
	
	// Thiết lập email reply
	$mail->AddReplyTo('pntbmws1000rr@gmail.com');
	
	// Đính kèm tập tin
	$mail->AddAttachment('tuoihoctro.rar');
	
	// Thiáº¿t láº­p tiÃªu Ä‘á»�
	$mail->Subject = "PHP Mailer - 02";
	
	// Thiáº¿t láº­p charset
	$mail->CharSet = 'utf-8';
	
	// Thiáº¿t láº­p ná»™i dung
	$body		= "KhÃ³a há»�c láº­p trÃ¬nh web vá»›i <b>PHP - ZendVN</b>";
	
	//$mail->Body = $body;
	$mail->MsgHTML($body);
	
	if($mail->Send() == false){
		echo 'Error: ' . $mail->ErrorInfo;
	} else{
		echo 'Success';
	}