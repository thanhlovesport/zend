<?php
	$strxml = '<book id = "9">
	<title>Lập Trình Joomla </title>
	<author>ZendVN</author>
	<page>450</page>
	<weight unit = "gram">500</weight>
	<price>
		<real>60</real>
		<saleoff>45</saleoff>
	</price>
	<shipping>
		<US> 1.6 </US>
		<EU> 1.4 </EU>
		<VN> 1 </VN>
	</shipping>
	</book>';
echo gettype($strxml);
$xml = simplexml_load_string($strxml);// chuyễn 1 chuỗi thành 1 đối tượng XML
echo '<pre>';
print_r($xml);
echo '</pre>';
echo gettype($xml); // in ra kiểu object