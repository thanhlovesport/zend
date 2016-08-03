<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
     protected function _initAutoload(){
        //echo '<br/>'.__METHOD__;
        $arrConfig = array('namespace'=>'',
                           'basePath'=>APPLICATION_PATH);
        $autoload = new Zend_Application_Module_Autoloader($arrConfig);
        return $autoload;
    } 
    /*  protected function _initDoctype()
    {
        echo '<br>'.__METHOD__;
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }  */
   
    
    protected function _initView(){
        $view = new Zend_View();
        $view->headTitle()->append('My App');
        $view->headMeta()->appendHttpEquiv('Content-Type','text/html; charset=utf-8');
        
        return $view;
    }
    protected function _initDb(){
       
        $dbOption = $this->getOption('resources');
        $dbOption = $dbOption['db'];
        
        $db = Zend_Db::factory($dbOption['adapter'],$dbOption['params']);
        
        Zend_Registry::set('connectDB',$db);
        
        Zend_Db_Table::setDefaultAdapter($db);
        
       /*  echo "<pre>";
        print_r($dbOption);
        echo "</pre>"; */
    }
}

