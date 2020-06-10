<?php

$laptop = array( 
	"Dell" => array("Price" => 5000 , "Ram" => "4 GB" , "Hard" => "500 GB" ),
	"Hp" => array ("Price" => 6000 , "Ram" => "4 GB" , "Hard" => "500 GB"),
	"Asser" => array ("Price" => 4000 , "Ram" => "4 GB" , "Hard" => "500 GB")
 );

$keys = array_keys($laptop);

$i = 0;
while ($i < count($keys)) {

	$key = array_keys($laptop[$keys[$i]]);
	$j = 0;
	while ($j < count($key)) {
		echo $keys[$i] . $key[$j] . $laptop[$keys[$i]][$key[$j]] . "<br>";
		$j++;
	}
	echo "<br>";
	$i++;
}


?>