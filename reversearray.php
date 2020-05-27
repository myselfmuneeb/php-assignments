<?php

$array = array( 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10);
echo "FOR LOOP: <br>";
for ($i = count($array) - 1; $i>=0; $i--) { 
	
	echo $array[$i] . "<br>";
	
	}
echo "WHILE LOOP :<br>";
$s = count($array) - 1;
while ( $s>= 0) {
	echo $array[$s] . "<br>";
	$s--;
}

echo "DO WHILE LOOP :<br>";
$a = count($array) - 1;
do{
	echo $array[$a] . "<br>";
	$a--;
}while($a>=0);


?>
