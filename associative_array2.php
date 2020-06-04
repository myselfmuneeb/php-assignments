<?php
// FOreach loop Associative Array

$fee = array("Ahmed" => 1000 , "Ali" => 2000 , "Muneeb" => 3000);

foreach ($fee as $keys => $value) {
	echo $keys . " = " . $value . "<br>";
}

?>