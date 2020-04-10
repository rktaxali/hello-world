<?php 
/* http://www.w3resource.com/php-exercises/php-array-exercises.php
8. Write a PHP script to sort the following associative array : Go to the editor
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
 */

$a = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo '<pre>';
echo "<br />";

//a) ascending order sort by value
asort($a); 
print_r($a);

//b) ascending order sort by Key
ksort($a); 
print_r($a);

//c) descending order sorting by Value
arsort($a); 
print_r($a);


//d) descending order sorting by Key
krsort($a); 
print_r($a);

 
?>  






