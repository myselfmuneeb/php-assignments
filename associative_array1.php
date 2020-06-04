<?php
// FOr loop Associative Array
$name = array("muneeb" => 500 , "Ali" => 600 , "Ahmed" => 700);

$keys = array_keys($name);
for ($i=0; $i < count($keys) ; $i++) { 
	echo $keys[$i] . " = " . $name[$keys[$i]] . "<br>";
}


?>