<?php
	$xml = new DOMDocument('1.0', 'UTF-8');
	
	$book		= $xml->createElement('book');
	// tạo title .... tạo node
	$title = $xml->createElement('title','Lập trìnhPHP');
	$author = $xml->createElement('author','ZendVN');
	$page = $xml->createElement('page',500);
	$weight = $xml->createElement('weight',500);
	$price		= $xml->createElement('price');
	$real		= $xml->createElement('real',65);
	$saleoff	= $xml->createElement('saleoff',50);
	
	$unitAttri = $xml->createAttribute('unit');
	$unitAttri->value = 'gram';
	$weight->appendChild($unitAttri);
	// xét mối qua hệ giữa title vào book, title là con của book .... xét mối quan hệ
	
	$book->appendChild($title);
	$book->appendChild($author);
	$book->appendChild($page);
	$book->appendChild($weight);
	$price->appendChild($real);
	$price->appendChild($saleoff);
	
	$book->appendChild($price);
	$xml->appendChild($book);
	$xml->formatOutput = true;
	$xml->save('../files/mybooks-03.xml') or die('Error');
