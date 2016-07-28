<?php
class Session{
    public static function init() { // phương thức thường được sử dụng để chạy trước các phương thức khác
         session_start();
    }
    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }
    public static function get($key){
        if (isset( $_SESSION[$key])){
            return $_SESSION[$key] ;    
        }
    }
    public static function destroy($key){
        session_destroy();
    }
}
// Session::init như là dùng để khỏi khởi tạo môt đối tượng lớp session