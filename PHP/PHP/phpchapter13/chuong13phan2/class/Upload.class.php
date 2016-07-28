<?php
require_once 'ThumbLib.inc.php';
class Upload{
    
    // Biến lưu trữ tên tập tin
    private $_filename;
    
    // Biến lưu trữ kích thước tập tin
    private $_filesize;
    
    // Biến lưu trữ phần mở rộng
    private $_fileextension;
    
    // Biến lưu trữ thư mục tạm: thư mục lưu file khi upload lên server
    private $_filetmp;
    
    // Biến lưu trữ lỗi nếu xảy ra
    private $_errors;
    
    // Biến lưu trữ đường dẫn upload
    private $_uploadDir;
    
    public function __construct($filename){
        $fileInfo = $_FILES[$filename]; // In mảng $_FILES sẽ ra được một mảng
        $this->_filename = $fileInfo['name'];
        $this->_filesize = $fileInfo['size'];
        $this->_filetmp  = $fileInfo['tmp_name'];
        $this->_fileextension = $this->getFileExtension();
    }
    private function getFileExtension(){
        $ext = pathinfo($this->_filename,PATHINFO_EXTENSION);
        return $ext;
    }
    public function setFileExtension($arrExtension){
        if (in_array(strtolower($this->_fileextension), $arrExtension) == false){
            $this->_errors[] = 'Phần mở rộng không phù hợp';
        }
    }
    // Thiết lập kích thước tối thiểu và tối đa của một tập tin
    public function setFileSize($min,$max){
        if($this->_filesize < $min || $this->_filesize > $max){
            $this->_errors[] = 'Kích thước file không phù hợp';
        }
       
    }
    // Thiết lập đường dẫn đến folder Upload
    public function setUploadDir($value){
        if(file_exists($value)){
            $this->_uploadDir = $value;
        }else{
            $this->_errors[] = 'Đường dẫn đến folder upload không phù hợp';
        }
    }
    // Kiểm tra điều kiện upload của tập tin 
    public function isValid(){
       $flag = count(($this->_errors)) > 0 ? false: true;
      
       return $flag;
    }
    public function showError(){
               
        $xhtml = '';
        if(!empty($this->_errors)){
            $xhtml = '<ul class="alert alert-danger">';
            	foreach ($this->_errors as $error){
            	    $xhtml .= '<li>'.$error.'</li>';
            	}
            $xhtml .='</ul>';
            		
        }
        return $xhtml;
    } 
    // Phương thức upload tập tin
    public function upload($rename = true){     
        if ($rename == true){
            $filename = $this->randomString();
            $destination = $this->_uploadDir.$filename;
            //$destination = $this->_uploadDir.$this->randomString();
        }else {
            echo $destination = $this->_uploadDir . $this->_filename;
            
        }
        @move_uploaded_file($this->_filetmp, $destination);
        
        $fileName = pathinfo($destination,PATHINFO_FILENAME);
        
        // 125x125
        $thumb = PhpThumbFactory::create($destination);
        $thumb->resize(125,125);
        $thumb->save($this->_uploadDir.'125-'.$fileName.'.'.$this->_fileextension);
        
        // 450x450
        $thumb = PhpThumbFactory::create($destination);
        $thumb->resize(450,450);
        $thumb->save($this->_uploadDir.'450-'.$fileName.'.'.$this->_fileextension);
        
    }
    private function randomString($length = 6){
        $arrCharacter = array_merge(range('A', 'Z'),range('a', 'z'),range(0, 9));
        $arrCharacter = implode($arrCharacter, ''); // Gọp một mảng thành chuỗi, phân cách bởi kí tự gì đó
        $arrCharacter = str_shuffle($arrCharacter); // Trộn chuỗi lên
        
        $result       = substr($arrCharacter, 0,5) . '.' . $this->_fileextension;// Chiết xuất chuỗi
        
        return $result;
       
    }
    
}