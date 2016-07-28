<?php
    // Xây dựng một website BookStore : Programming, Design, English
    // 01.php?type=programming&id=2&name=abc
    
// Xây dựng các class dựa trên các thể loại sách
abstract class Book{
    private $id;
    private $name;
    protected  $type = null;
    
    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    public function getid(){
        return $this->id;
    }
    public function getname(){
        return $this->name;
    }
    public function gettype(){
        return $this->type;
    }
}
class BookProgramming extends Book{
   protected $type = 'Programming';
}
class BookDesign extends Book{
    protected $type = 'Design';
    
}
class BookEnglish extends Book{
    protected $type = 'English';

}
$bookprogramming = new BookProgramming('1', 'PHP Programming');





