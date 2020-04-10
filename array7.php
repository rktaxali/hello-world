<?php 
/* http://www.w3resource.com/php-exercises/php-array-exercises.php
7. Write a PHP script that insert a new item in an array on any position. Go to the editor
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5
 */




$original = array( '1','2','3','4','5' );  
echo 'Original array : <br>';  
foreach ($original as $x)   
{ echo "$x ";} 
 
echo "<br />";
$inserted = '$';  
array_splice( $original, 3, 0, $inserted );   // remove 0 elements strting from 3rd element (3) and replace it with $x
// indirectly, insert $x at 3rd postion
echo " <br> After inserting '$' the array is :<br>";  
foreach ($original as $x)   
{echo "$x ";}  
 
?>  






