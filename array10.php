<?php 
/* http://www.w3resource.com/php-exercises/php-array-exercises.php
10. Write a PHP program to sort an array of positive integers using 
the Bead Sort Algorithm. Go to the editor
According to Wikipedia "Bead sort is a natural sorting algorithm, 
developed by Joshua J. Arulanandham, Cristian S. Calude and Michael 
J. Dinneen in 2002. 
Both digital and analog hardware implementations of bead 
sort can achieve a sorting time of O(n); however, 
the implementation of this algorithm tends to be significantly 
slower in software and can only be used to sort lists of positive integers".

Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 ) 
Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )
 */
echo "<pre>";
$a = Array ( 5, 3, 1, 3, 8, 7, 4 , 1, 1, 3 ) ;

bead_sort($a);
print_r($a);  // verify result


function bead_sort(array & $a )  // Ensure that the passed variable is array
{
	// variable passed by reference
	$elements = count($a);
	
	if ($elements >= 2 ) {
		// Go through all elements of the array to be sorted 
		for ($i=0; $i<$elements; $i++) {
			$current_value =  $a[$i];
			$max =0;
			// Now read all elements starting from current element + 1 and find
			// the maximum value and its index
			for ($j=$i+1; $j < $elements; $j++) {
				if ($a[$j] > $max ) {
					$max= $a[$j];
					$highest_element = $j;
				}	
			}
			// We have found the max value, put it in the current element
			// and replace the element that contained the max value with the curent element 
			$a[$i]= $max;
			$a[$highest_element] = $current_value;
		}
	}
}
 
?>  






