<?php
    $data = array(
            'name'=> 'ngo thi quynh ai',
            'age' => '20',
            'email'=> 'quynhai@gmail.com'
    );
    $filters = array(
                'name'=>array(
                                'filter'=>FILTER_CALLBACK,
                                'options'=>'ucwords'
                            ),
                'age'=>array(
                                'filter'=>FILTER_VALIDATE_INT,
                                'options'=>array('min_range'=>10,'max_range'=>100)
                             ),
                'email'=>array(
                                'filter'=>FILTER_VALIDATE_EMAIL
                ),
    );
    $result = filter_var_array($data,$filters);
    echo '<pre>';
    print_r($result);
    echo '</pre>';