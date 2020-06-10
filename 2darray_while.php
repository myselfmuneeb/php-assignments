<?php

$name = array(

	array("Name :" , " Age :" , " Married / single :"),
	array("Ali " , 24 , " single"),
	array("Muneeb " , 25 , " single")

);

$i = 0;
while ($i < count($name)) {
	
	$j = 0;
	while ($j < count($name[$i])) {
		echo $name[$i][$j];
		$j++;
	}
	echo "<br>";
	
	$i++;
}

?>