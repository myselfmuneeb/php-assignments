<?php

$name = array(

	array("Name :" , " Age :" , " Married / single :"),
	array("Ali " , 24 , " single"),
	array("Muneeb " , 25 , " single")

);

foreach ($name as $keys => $value) {
	foreach ($value as $key => $values) {
		echo "[$keys] " . " [$key] " . $values . "<br>";
	}
	echo "<br>";
}

//echo $laptop[1][0];

?>