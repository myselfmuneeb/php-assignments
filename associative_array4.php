<?php

$name = array("Ali" => 100 , "Ahmed" => 200 , "Muneeb"=> 300);
$keys = array_keys($name);
$i = 0;
do{
	echo $keys[$i] . " = " . $name[$keys[$i]] . "<br>" ;
	$i++;
}while ( $i<count($keys));

?>