<?php  
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 

$array_merge = array_merge($array2,$array1);
echo "<pre>";

$merged_array = array_map('merge_array_together',$array1,$array2);


function merge_array_together($a1, $a2) {
	$ret_array=array();
	$ret_array = $a1;  // save first parameter in return array

	if ( is_scalar($a2) )
		$ret_array[] = $a2;
	else {
		foreach($a2 as $k=>$val) {
			$ret_array[] = $val;
		}
	}
	return $ret_array;
}	
		


echo "<br />Final O/P .. <br /><br />";
print_r($merged_array);
echo "<pre>";


?>  