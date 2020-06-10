<?php

$laptop = array( 
	"Dell" => array("Price" => 5000 , "Ram" => "4 GB" , "Hard" => "500 GB" ),
	"Hp" => array ("Price" => 6000 , "Ram" => "4 GB" , "Hard" => "500 GB"),
	"Asser" => array ("Price" => 4000 , "Ram" => "4 GB" , "Hard" => "500 GB")
 );

$keys = array_keys($laptop);
for ($i=0; $i < count($keys); $i++) {
	$key = array_keys($laptop[$keys[$i]]);
	for ($j=0; $j < count($key); $j++) { 
		echo  $keys[$i] . $key[$j] . $laptop[$keys[$i]][$key[$j]] . "<br>";
	}
	echo "<br>";
}

?>