<?php
	$book = array(
	               'id'        =>11,
	               'author'    =>'ZendVN',
	               'title'     =>'Lập Trình PHP',
	               'page'      =>500,
	               'weight'    => array(
	                                       'attributes'=>array('unit'=>'gram'),
	                                       'data'      => 500
	                                    ),
	               'shipping'  => array(
	                                       'data'  => array('US'=>1.3,'EU'=>2.5,'VN'=>1)
	                                   ),
	);
	$xml = new DOMDocument('1.0','UTF-8');
	$root = $xml->createElement('book');
	
	$xml->appendChild($root);
	foreach ($book as $key => $value){
	    if (is_array($value)){
	        if (is_array($value['data'])){
	            $node = $xml->createElement($key);
	            foreach ($value['data'] as $keyD => $valueD){
	                $nodeChile = $xml->createElement($keyD,$valueD);
	                $node->appendChild($nodeChile);
	            }
	        }else{
				$node = $xml->createElement($key, $value['data']);
			}
			if(array_key_exists(attributes, $value)){
				foreach($value['attributes'] as $keyA => $valueA){
					$attr = $xml->createAttribute($keyA);
					$attr->value = $valueA;
					$node->appendChild($attr);
				}
			}
	    }else{
	        $node = $xml->createElement($key,$value['data']);
	    }
	    
	    $root->appendChild($node);
	}
	$xml->formatoutput = true;
	$xml->save('../files/mybooks-06.xml') or die('ERROR');