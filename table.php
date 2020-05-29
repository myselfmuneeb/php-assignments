<?php

echo "FOR LOOP: <br>";

$table = 2;
for ($num = 1; $num <= 10 ; $num++) { 
	echo $table . " X " . $num . " = " . $table*$num . "<br>" ;
}

echo "WHILE LOOP :<br>";

$table2 = 3;
$num2 = 1;
while ($num2 <= 10) {
	echo $table2 . " X " . $num2 . " = " . $table2*$num2 . "<br>" ;
	$num2++;
}

echo "DO WHILE LOOP :<br>";

$table3 = 4;
$num3 = 1;

do{
	echo $table3 . " X " . $num3 . " = " . $table3*$num3 . "<br>" ;
	$num3++;
}while($num3 <= 10);

?>