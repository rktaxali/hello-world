<?php  
//http://www.w3resource.com/php-exercises/php-array-exercises.php
/*
2. Write a PHP function to change the following array's all values to upper or lower case. Go to the editor
Sample arrays : 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output : 
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
*/

echo "<pre>";
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

$color_lowercase = array_map("strtolower",$Color); // array_maps sends each array element to "strtolower" function
// We can also use a udf in place of built-in PHP function
// e.g.

$color_lowercase = array_map("convert_to_lowercase",$Color); // array_maps sends each array element to "strtolower" function

function convert_to_lowercase($value) {
	return strtolower($value);
	
}
print_r($color_lowercase);

$color_uppercase = array_map("strtoupper",$Color);
print_r($color_uppercase);



?>  