<?php 
/* http://www.w3resource.com/php-exercises/php-array-exercises.php
9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. Go to the editor
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85,
 */

$a = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
echo "<br />";
sort($a);
// avg temp 
echo "Avg temp:" . array_sum($a)/count($a);
echo "<br />";

// remove dupliate
$u = array_unique($a);
sort($u);	// must sort to reindex 
// List of five lowest temperatures
echo "List of five lowest temperatures :";
for ($i=0; $i<5; $i++)  echo $u[$i] . ', ';
	echo "<br />";

// List of five highest temperatures
echo "List of seven lowest temperatures :";
for ($i=count($u)-5; $i<count($u); $i++)
	echo $u[$i] . ', ';






 
?>  






