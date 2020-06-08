<?php

$laptop = array(

	array("Name :" , " Age :" , " Married / single :"),
	array("Ali " , 24 , " single"),
	array("Muneeb " , 28 , " single")

);

foreach ($laptop as $keys => $value) {
	echo "<br>";
	foreach ($value as $key => $values) {
		echo $keys . " " . $key . " " . $values;
	}
	echo "<br>";
}

//echo $laptop[1][0];

?>