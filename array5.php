<?php 

//http://www.w3resource.com/php-exercises/php-array-exercises.php
// exercise 5

/* 5. $color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array. Go to the editor
Expected result : white
 */
 $color = array(4 => 'white', 6 => 'green', 11=> 'red');
 
/*  Not efficient 
$keys = array_keys($color);	// get all keys 4,6,11
echo $color[$keys[0]];	// get value corresponding to the first key 

 */

 // use reset()
 echo reset($color);	// reset() sets the internal array pointer and returns the first element
 
 





?>