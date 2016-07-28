<?php
    $to = "phamngocthanh3009@gmail.com";
    $subject = 'send mail';
    $message = 'wow! beautiful hotel';
    $header = "From: a football player";
    if(mail($to, $subject, $message,$header)==true){
        echo 'Success';
    }else {
        echo 'Fail';
    }