<?php
class Database{
    
    private static  $instance;
    public static function getinstance(){ // thêm từ khóa static ngoài trước để ta có thể dùng tên lớp gọi nó
        if(!isset(self::$instance))   self::$instance = new Database();
            
        return self::$instance;
    }
    // Block
    private function __construct(){
        // Thêm từ khóa private đằng trước để khởi tạo đối tượng thì phương thức này sẽ không được gọi
    }
    // Block
    private function __clone(){
        
    }
}

$db1 = Database::getinstance();
//$db2 = clone $db1;
echo '<pre>';
var_dump($db1);
echo '</pre>';

