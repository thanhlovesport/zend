<?php
	/* echo '<pre>';
	print_r($_POST); // Nhan cac gia tri ma nguoi dung gui qua
	echo '</pre>'; */
	
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username)){
        // viet thong bao loi, gan vao bien message
        $message ['username'] = 'Username khong duoc rong';
    }else if ($username != 'ngocthanh'){
        $message ['username'] = 'Username khong ton tai';
    }
    
    if(empty($password)){
        // viet thong bao loi, gan vao bien message
        $message ['password'] = 'password khong duoc rong';
    }else if ($password != '123456'){
        $message ['password'] = 'password khong ton tai';
    }
    /* echo '<pre>';
    print_r($message);
    echo '</pre>'; */
    
    $status = 'error';
    if(count($message) == 0) $status = 'success';
    
    $reponse = array(
        'status' => $status,
        'message'=> $message
    );
    echo $jsonString = json_encode($reponse);
?>