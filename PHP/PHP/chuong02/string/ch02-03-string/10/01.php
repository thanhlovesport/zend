
<?php
	$str	= "       Php is easy"; 
	
	echo "Input: " . $str . " - length: " . strlen($str);
	
	$str	= ltrim($str);
	
	echo "<br />";
	
	echo "Output: " . $str . " - length: " . strlen($str);
	echo '<br/>';
	$str1 = "     Zend2 is difficult";
	echo "The length in put of str1 is: " .strlen($str1)."<br/>";
	$str1 = ltrim($str1);
	echo "The length out put of str1 is" .strlen($str1)."<br/>";
	
?>
