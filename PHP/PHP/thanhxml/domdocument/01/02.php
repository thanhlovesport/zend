<?php
	$xml = new DOMDocument('1.0', 'UTF-8');
	/* <book>
	<title>Lập trình PHP</title>
	<author>ZendVN</author>
	<page>500</page>
	</book> */
	
	$book		= $xml->createElement('book');
	// tạo title .... tạo node
	$title = $xml->createElement('title','Lập trìnhPHP');
	$author = $xml->createElement('author','ZendVN');
	$page = $xml->createElement('page',500);
	// xét mối qua hệ giữa title vào book, title là con của book .... xét mối quan hệ
	
	$book->appendChild($title);
	$book->appendChild($author);
	$book->appendChild($page);
	
	$xml->appendChild($book);
	$xml->formatOutput = true;
	$xml->save('../files/mybooks-02.xml') or die('Error');
