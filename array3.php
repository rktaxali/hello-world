<?php 

 $ceu = array( "Italy"=>"Rome", 
 "Luxembourg"=>"Luxembourg",
 "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
 "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
 "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", 
 "Lithuania"=>"Vilnius", 
 "Czech Republic"=>"Prague", 
 "Estonia"=>"Tallin", "Hungary"=>"Budapest",
 "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
 "Poland"=>"Warsaw") ;
 
 
 echo '<pre>';
 ksort($ceu);
 
 foreach ($ceu as $country=>$capital) {
		echo "The capital of $country is $capital <br />";
 }
 
// alternate approach to print using array_walk, calls callback function with key, value
array_walk($ceu, "print_result");

function print_result($v, $k) 
{
	echo "The capital of $k is $v <br />";
}









?>