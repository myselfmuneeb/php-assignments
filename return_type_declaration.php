<?php
declare(strict_types=1);
function add (float $num1 , float $num2) : float
{
	echo '$num1 is data type of ' . gettype($num1) . " = $num1 <br>";
	echo '$num2 is data type of ' . gettype($num2) . " = $num2 <br>";
	return $num1 + $num2;
}
$sum = add(2.5 , 3.8);
echo gettype($sum) . " " . $sum;