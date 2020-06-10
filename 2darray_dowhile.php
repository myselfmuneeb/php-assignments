<?php

$name = array(

	array("Name :" , " Age :" , " Married / single :"),
	array("Ali " , 24 , " single"),
	array("Muneeb " , 25 , " single")

);
$i = 0;
do{
	$j = 0;
	do{
		echo $name[$i][$j];
		$j++;
	}while($j < count($name[$i]));
	echo "<br>";
	$i++;
}while($i < count($name));

?>