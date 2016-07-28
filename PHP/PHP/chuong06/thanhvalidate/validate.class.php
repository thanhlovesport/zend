<?php
class validate{
    // lưu trữ phần thông báo lỗi khi các phần tử trong mảng không hợp lệ
    private $errors = array();
    // mảng dữ liệu truyền vào để validate
    private $source = array();
    // Các qui tắc kiểm tra cho một phần tử
    private $rules = array();
    // Trường hợp phần tử không có lỗi
    private $results = array();
    
    // construct
    public function __construct($source){
        
    }
    
    // Add rules
    public function addrules($rules){
        $this->rules= array_merge($rules, $this->rules);
    }
    // Get error
    public function getErrors(){
        return $this->errors;
    }
    // Get Result
    public function getResult(){
        return $this->results;
    }
    // Trường hợp add rule cho một phần tử
    public function addrule($element,$type,$min = 0, $max = 0){
        $this->rules[$element] = array('type'=>$type,'min'=>$min,'max'=>$max);
        return $this; // giúp cho cách viết add rule bên file 02 chạy được
    }
    // Run
    public function run(){
        foreach ($this->rules as $element=>$value){
            //echo $element.'<br/>';
           /*  echo '<pre>';
            print_r($value);
            echo '</pre>';die('Function is call'); */
            switch ($value['type']){
                case 'int':
                    $this->validateInt($element,$value['min'],$value['max']);
                break;
                case 'string':
                    $this->validateStr($element,$value['min'],$value['max']);
                    break;
                case 'url':
                    $this->validateUrl($element);
                    break;
                case 'email':
                    $this->validateEmail($element);
                    break;
            }
            if(!array_key_exists($element,$this->errors)){
                $this->results[$element] = $this->source[$element];
            }
        }
        
    }

    // validate integer
    private function validateInt($element,$min = 0,$max = 0){
        /* 
        echo $this->source[$element].'<br/>';
        echo $element;die('Stop at here'); */
        if(!filter_var($element, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min,"max_range"=>$max)))){
            $this->errors[$element] = 'is an invalid number';
        }
    }
    // validate string
    private function validateStr($element,$min = 0,$max = 0){
       $length = strlen($this->source[$element]);
       if($length < $min){
           $this->errors[$element] = 'is too short';
       }elseif ($length > $max){
           $this->errors[$element] = 'is too long';
            
       }elseif (!is_string($this->source[$element])){
           $this->errors[$element] = 'is an invalid string';
            
       }
    }
    // validate url
    private function validateUrl($element,$min = 0,$max = 0){
        /*
         echo $this->source[$element].'<br/>';
         echo $element;die('Stop at here'); */
        if(!filter_var($element, FILTER_VALIDATE_URL)){
            $this->errors[$element] = 'is an invalid Url';
        }
    }
    // validate email
    private function validateEmail($element,$min = 0,$max = 0){
        /*
         echo $this->source[$element].'<br/>';
         echo $element;die('Stop at here'); */
        if(!filter_var($element, FILTER_VALIDATE_EMAIL)){
            $this->errors[$element] = 'is an invalid Email';
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}