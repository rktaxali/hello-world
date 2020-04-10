<?php 
//http://www.w3resource.com/php-exercises/php-array-exercises.php
// exercise 4
 $x = array(1, 2, 3, 4, 5);
 
 
 var_dump($x);
 
 unset($x[2]);
 echo '<br />';
 var_dump(array_values($x));
 
 exit;
 
 
 
 
 array_splice($x,2,1);
 echo '<br />';
  var_dump($x);
  
  
 
 
/*  
 echo '<pre>';
 ksort($ceu);
 foreach ($ceu as $country=>$capital) {
		echo "The capital of $country is $capital <br />";
 }
 


 */






?>