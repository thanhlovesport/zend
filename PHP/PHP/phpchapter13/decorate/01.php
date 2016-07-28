<?php
// Phát triển một website
// Với developer: Ghi thông báo lỗi lên web, gửi qua email hoặc file
// Khi website đã publish : Gửi thông báo lỗi khi người dùng gặp phải qua file
class Developer{
    public function logfile($message){
        echo "<h3> Error on File {$message} <h3/>";
    }
    public function logEmail($message){
        echo "<h3> Error on Email {$message} <h3/>";
    }
    public function logWeb($message){
        echo "<h3> Error on Web {$message} <h3/>";
    }
}
class Publish{
    public function logfile($message){
        echo "<h3> Error on File {$message} <h3/>";
    }
   
}

// Bổ sung: 
// Developer : Email + Web + File + Database
// Publish   : File + Email
$developer = new Developer();
$developer->logfile('saving');
$developer->logEmail('saving');
$developer->logWeb('saving');
