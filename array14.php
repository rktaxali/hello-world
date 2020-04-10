<?php  
//http://www.w3resource.com/php-exercises/php-array-exercises.php
/*
14. Write a PHP script to get the shortest/longest string length from an array. Go to the editor
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4.
*/

echo "<pre>";
$a = array("abcd","abc","de","hjjj","g","wer");
$min=NULL;
$max=0;
foreach ($a as $value){
	
	if (strlen($value) > $max ) $max = strlen($value);
	
	if (is_null($min) ) $min = strlen($value);
	elseif ($min > strlen($value))
		$min = strlen($value);
	
}

echo "Shortest:  $min        Longest: $max" ;



?>  