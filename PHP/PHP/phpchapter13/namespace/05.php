<?php
namespace ab\cd{
    function showHI($name){
        echo "Hi {$name}, Nice to meet you !";
    }
    // In ra namespace hiện tại
    //echo __NAMESPACE__;
    showHI('Messi');
}
namespace zend\zend2{
    function showHI($name){
        echo "Hi {$name}, Nice to meet you !";
    }
    
    showHI('Silva');
}