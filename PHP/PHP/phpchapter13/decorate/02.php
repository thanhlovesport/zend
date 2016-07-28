<?php
// Phát triển một website
// Với developer: Ghi thông báo lỗi lên web, gửi qua email hoặc file
// Khi website đã publish : Gửi thông báo lỗi khi người dùng gặp phải qua file

interface logger{
    public function log($msg);
}

abstract class loggerdecorate implements logger{
    protected  $logger;
    public function __construct(logger $logger){
        $this->logger = $logger;
    }
    abstract public function log($msg);
}

class Filelog implements logger{
    public function log($msg){
        echo "<h3> Error on File: {$msg} <h3/>";
        
    }
}
class Emailloger extends loggerdecorate{
     
     public function log($msg){
         $this->logger->log($msg);
         echo "<h3> Error on Email: {$msg} <h3/>";
     }
    
}

class Databaselogger extends loggerdecorate{
     
    public function log($msg){
        $this->logger->log($msg);
        echo "<h3> Error on Database: {$msg} <h3/>";
    }

}


$log = new Filelog();               // log : Filelog
$log = new Emailloger($log);        // log : Emailloger: $this->logger = Filelog
//$log = new Databaselogger($log);
$log->log('Saving');