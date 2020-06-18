<?php

echo "Passing Array from Funchtion <br>";
	// Passing Array from Funchtion

	$number = array(10 , 20 , 30 , 40 , 50);

	function sum1($value1){
		$s = 0;
		foreach ($value1 as $value) {
			$s = $s + $value;
		}
		return $s;
		
	}

	echo sum1($number);

echo "<br>";

function sum2($value1){
	$s = 0;
	for ($i=0; $i < count($value1) ; $i++) { 
		$s = $s + $value1[$i];
	}
	return $s;
}
echo sum2($number);

echo "<br> Returning Array from Function <br>";
//Returning Array from Function

Function cal($num1 , $num2){
	$add = $num1 + $num2;
	$sub = $num1 - $num2;
	$multi = $num1 * $num2;
	$div = $num1 / $num2;

	$result = array($add , $sub , $multi , $div);
	return $result;
}

$answer = cal(20 , 10);

for ($i=0; $i < count($answer) ; $i++) { 
	echo $answer[$i] . "<br>";
}
/*foreach ($answer as $value) {
	echo $value . "<br>";
}
*/

?>