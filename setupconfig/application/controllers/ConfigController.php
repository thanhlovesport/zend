<?php

class ConfigController extends Zend_Controller_Action
{

    public function indexAction()
    {
        var_dump(123);
        /* $filename = CONFIG_PATH .'/db.ini';
        $section = 'information';
        $config = new Zend_Config_Ini($filename,$section); */
        
    }
    public function writeiniAction(){
        var_dump(1234); 
    }
}