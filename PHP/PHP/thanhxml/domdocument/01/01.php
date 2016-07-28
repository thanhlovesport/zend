<?php
	$xml = new DOMDocument('1.0', 'UTF-8');
	
	// <book></book> 	$book	= $xml->createElement('book');
	// Láº­p trÃ¬nh PHP 	$bookText	= $xml->createTextNode('Láº­p trÃ¬nh PHP');
	
	$book		= $xml->createElement('book');
	$bookText	= $xml->createTextNode('Lập trình PHP');
	$book->appendChild($bookText);
	
	
	
	$xml->appendChild($book);
	$xml->save('../files/mybooks-01.xml') or die('Error');
