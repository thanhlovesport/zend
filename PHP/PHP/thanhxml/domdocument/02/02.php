<?php
    $dom = new DOMDocument();
    $dom->load('../files/01.xml');
    $book = $dom->getElementsByTagName('book');
    $bookPHP = $book->item(0);
    $currentnode =$bookPHP->tagName.'<br/>';
    $parentnode = $bookPHP->parentNode->tagName.'<br/>';
    echo $titleNode = $bookPHP->getElementsByTagName('title')->item(0)->nodeValue;
    
    /* foreach ($bookPHP->attributes as $attri){
       echo 
    } */
    /* echo '<pre>';
    print_r($bookPHP->attributes);
    echo '</pre>'; */
    
    
    /* echo '<pre>';
    print_r($titleNode->item(0)->nodeValue);
    echo '</pre>'; */