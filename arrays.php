<?php

	$array = array(1 , 2 , 3 , 4 , 5 , 6 );
	
	//$reverse = array_reverse($array);
	echo "FOR LOOP: <br>";
	for ($i=0; $i <count($array) ; $i++) { 
		echo $array[$i];
	}
	echo "<br>WHILE LOOP :<br>";
	$a = 0;
	while ($a<count($array)) {
		echo $array[$a];
		$a++;
	}
	echo "<br> DO WHILE LOOP :<br>";
	$s = 0;
	do {
		echo $array[$s];
		$s++;
	}while ($s<count($array));

	echo "<br> FOREACH LOOP :<br>";
	foreach ($array as $value) {
		echo $value;
	}

?>