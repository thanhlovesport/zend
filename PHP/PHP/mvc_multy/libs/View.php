<?php

class View
{
    private $moduleName;
    public function render($module,$fileInclude)
    {   
        $path = APPLICATION_PATH.DS.$this->moduleName.DS.'views'.DS.$fileInclude.'.php';
        if(file_exists($path))
        {
            require_once '$path';
        }else {
            echo 'ERROR';
        }
    }
    
   
}