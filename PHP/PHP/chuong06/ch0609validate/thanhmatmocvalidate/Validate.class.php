<?php 
    Class Thanhvalidate{
        
        private $errors = array();
        
        private $source = array();
        
        private $rules = array();
        
        private $result = array();
        
        public function __construct($source){
            $this->source = $source;
        }
        
        public function geterrors(){
            return $this->errors;
        }
        
        public function getresults(){
            return $this->result;
        }
        
        public function addRules($rules){
            $this->rules = array_merge($rules,$this->rules);
        }
        
        public function addrule($element,$type,$min,$max,$require = 'true'){
            $this->rules[$element] = array('type'=>$type,'min'=>$min,'max'=>$max,'require'=>$require);
            return $this;
        }
        
        public function run(){
            foreach($this->rules as $element=>$value){
                if($value['require'] == true && trim($this->source['element']) == null){
                    $this->errors[$element] = $this->source[$element].'is not empty';
                }else{
                    switch ($value['type']){
                        case 'int';
                        $this->ValidateInt($element,$value['min'],$value['max']);
                        break;
                        
                        case 'string';
                        $this->ValidateString($element,$value['min'],$value['max']);
                        break;
                        
                        case 'url';
                        $this->ValidateUrl($element);
                        break;
                        
                        case 'email';
                        $this->ValidateEmail($element);
                        break;
                    }
                }
                if(!array_key_exists($element, $this->errors)){
                    $this->result = $this->source[$element];
                }
                $eleNotValidate = array_diff_key($this->source, $this->errors);
                $this->result	= array_merge($this->result, $eleNotValidate);
                
            }
        }
        
        private function ValidateInt($element,$min = 0,$max = 0){
            if(!filter_var($this->source[$element],FILTER_VALIDATE_INT,array('options'=>array('min_range'=>$min,'max_range'=>$max)))){
                $this->errors[$element] = $this->source[$element].'Old is not valid';
            }
        }
        
        private function ValidateString($element,$min = 0, $max = 0){
            $strlen = strlen($this->source[$element]);
            if($strlen < $min){
                $this->errors[$element] = "'".$this->source[$element]."' is too short";
            }else if($strlen > $max){
                $this->errors[$element] = "'".$this->source[$element]."' is too loong";
            }else if(!is_string($this->source[$element])){
                $this->errors[$element] = "'".$this->source[$element]."' is not valid";
                
            }
        }
        
        private function ValidateEmail($element){
            if(!filter_var($this->source[$element],FILTER_VALIDATE_EMAIL)){
                $this->errors[$element] = "'".$this->source[$element]."' is an invalid Email";
                
            }
        }
        
        private function ValidateUrl($element){
            if(!filter_var($this->source[$element],FILTER_VALIDATE_URL)){
                $this->errors[$element] = "'".$this->source[$element]."' is an invalid URL";
            }
        }
        
        
        public function showErrors(){
            $xhtml = '';
            if(!empty($this->errors)){
                $xhtml .= '<ul class="error">';
                foreach($this->errors as $key => $value){
                    $xhtml .= '<li><b>'. ucfirst($key) .':</b> '.$value.' </li>';
                }
                $xhtml .=  '</ul>';
            }
            return $xhtml;
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }