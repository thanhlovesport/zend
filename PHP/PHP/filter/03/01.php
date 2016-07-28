<?php
    $value = '084-84-60.384059';
    $options = array(
                    'options'=>array('regexp'=>'#^084-[0-9]{2}-[0-9]{2}\.[0-9]{6}$#')
                    );
    if (!filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
        echo $value.'Số điện thoại không hợp lệ';
    }
    else {
        echo $value.'Số điện thoại hợp lệ';
    }