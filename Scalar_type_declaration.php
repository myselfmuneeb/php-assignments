<?php
//declare(strict_types=1);

function add ($num1 , $num2){
	echo '$num1 is data type of ' . gettype($num1) . " = $num1 <br>";
	echo '$num2 is data type of ' . gettype($num2) . " = $num2 <br>";
	return $num1 + $num2;
}
echo add(2 , "5");
echo "<br>";
function add2 (int $num1 , int $num2){
	return $num1 + $num2;
}

echo add2(25 , 25);