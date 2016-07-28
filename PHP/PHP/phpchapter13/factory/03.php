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
class Bookfactory{
    public static function build($booktype,$idbook,$namebook){
        $book = "Book".ucwords($booktype);
        if(class_exists($book))   $obj  = new $book($idbook,$namebook);
        return $obj;
        
       
    }
    
}

class BookController{
    public function createBook($infoBook){
       /*  switch ($infoBook['type']){
            case 'programming':
                $book = new BookProgramming($infoBook['id'], $infoBook['name']);
                break;
            case 'design':
                $book = new BookDesign($infoBook['id'], $infoBook['name']);
                break;
            case 'english':
                $book = new BookEnglish($infoBook['id'], $infoBook['name']);
                break;
            default:
                case 'programming':
                    $book = new BookProgramming($infoBook['id'], $infoBook['name']);
                    break;
        } */
        $book = Bookfactory::build($infoBook['type'], $infoBook['id'], $infoBook['name']);
        return $book;
    }
}

$bookcontroller = new BookController();

$infoBook = $_GET; // Lưu ý kiểu $_GET, khi in ra $infoBook , thông tin lấy được lúc này dựa trên trình duyệt

$book = $bookcontroller->createBook($infoBook);
echo '<pre>';
print_r($book);
echo '</pre>';



