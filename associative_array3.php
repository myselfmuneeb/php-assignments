<?php
// while loop Associative Array

$name = array("Ali" => 10 , "Ahmed" => 20 , "Muneeb"=> 30);
$keys = array_keys($name);
$i = 0;
while ( $i<count($keys)) {
	echo $keys[$i] . " = " . $name[$keys[$i]] . "<br>";
	$i++;
}

?>