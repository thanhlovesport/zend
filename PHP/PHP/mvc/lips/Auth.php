<?php
class Auth{ // Kiểm tra người dùng đăng nhập vào hệ thống hay chưa
    public static function checklogin() {
        Session::init();
        if(Session::get('loggedIn'==false )){
            Session::destroy();
            header("location: index.php?controller=user&action=login");
            exit();
        }
    }
}