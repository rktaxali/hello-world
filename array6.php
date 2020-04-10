<?php 
/* http://www.w3resource.com/php-exercises/php-array-exercises.php
6. Write a PHP script which decode the following JSON string. Go to the editor
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown
 */
 $color = '{"Title": "The Cuckoos Calling",
			"Author": "Robert Galbraith",
			"Detail": {
			"Publisher": "Little Brown",
			"Agent" : "Raj kumar"
			}
		}';
$array = json_decode($color,true);
 
foreach ($array as $key => $value) {
	if (is_array($value)) {
		foreach($value as $k=>$v) 
			echo $k . ' : ' . $v . '<br />';
	} else {
		echo $key . ' : ' . $value . '<br />';
	}
}

// alternate and better approach 
echo "<br/>";

array_walk_recursive($array,"printDetails");

function printDetails($v, $k) {
	echo $k . ' : ' . $v . '<br />';
}







?>