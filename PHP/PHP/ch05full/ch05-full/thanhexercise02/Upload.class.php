<?php

    class Upload{
        // biến lưu trữ tên tập tin
        private $_filename;
        // biến lưu trữ tên tập tin
        private $_filesize;
        // biến lưu trữ phần mở rộng tập tin
        private $_fileextension;
        // biến lưu trữ đường dẫn thư mục tạm
        private $_filetmp;
        // biến lưu trữ lỗi
        private $_error;
        // biến lưu trữ đường dẫn upload
        private $_uploaddir;
        
        
        // Phương thức khởi tạo
        public function __construct($filename){
            //echo __METHOD__;
            $fileinfo = $_FILES[$filename];
            $this->_filename    =$fileinfo['name'];
            $this->_filesize    =$fileinfo['size'];
            $this->_fileextension=$this->getfileextension();
            $this->_filetmp    =$fileinfo['tmp_name'];
            
            
            /* echo '<pre>';
            print_r($fileinfo);
            echo '</pre>'; */
        }
        // Phương thức lấy phần mở rộng
        public function getfileextension(){
            
            return $ext = pathinfo($this->_filename, PATHINFO_EXTENSION);
        }
        // Phương thức thiết lập phần mở rộng
        public function setfileextension($arrextension){
            /* echo __METHOD__;
            $ext = $this->_fileextension; */
            if (in_array(strtolower($this->_fileextension), $arrextension)==false){
                $this->_error[]= 'Phần mở rộng không phù hợp';
            }
              
        }
        // Phương thức thiết lập kích thước tối thiểu và tối đa
        public function setfilesize($min,$max){
            if ($this->_filesize<$min||$this->_filesize>$max){
                $this->_error[]= 'Kích thước không phù hợp';
            }else {
                echo 'Kích thước file  hợp lệ';
            }
        }
        // Phương thức thiết lập đường dẫn đến folder upload
        public function setuploaddir($value){
            if (file_exists($value)){
                $this->_uploaddir= $value;
            }else {
                $this->_error[] = 'Thư mục không hợp lệ';
            }
        }
        // Phương thức kiểm tra điều kiện upload của tập tin
        public function isVail(){
            $flag = false;
            if (count($this->_error > 0)){
                $flag = true;
            }
            return $flag;
        }
        // Phương thức upload tập tin
        public function Upload($rename = TRUE){
            if ($rename==true){
                $destination = $this->_uploaddir.time().'.'.$this->_fileextension;
            }else {
                $destination=$this->_uploaddir.$this->_filename;
            }
            @move_uploaded_file($this->_filetmp,$destination);
        }
        // Phươc thức hiển thị lỗi
        public function showerror(){
            echo '<pre>';
            print_r($this->_error);
            echo '</pre>';
        }
    }