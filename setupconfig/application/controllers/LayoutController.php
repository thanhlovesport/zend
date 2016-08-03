<?php
    class LayoutController extends Zend_Controller_Action{
        public function indexAction(){
            $options = array(
                'layoutPath'=> LAYOUT_PATH. '/scripts',
                'layout'=> 'index',
                'viewSuffix'=> 'phtml'
            );
            Zend_Layout::startMvc($options);    // Truyền tham số chứa tên file layout và đường dẫn tới layout, cho phép sử dụng layout
        }
    }