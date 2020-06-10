<?php

$name = array(

	array("Name :" , " Age :" , " Married / single :"),
	array("Ali " , 24 , " single"),
	array("Muneeb " , 25 , " single")

);

for ($i=0; $i < count($name) ; $i++) { 
	for ($s=0; $s < count($name[$i]) ; $s++) { 
		echo $name[$i][$s] . "<br>";
	}
}

?>