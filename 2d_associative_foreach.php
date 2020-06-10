<?php

$laptop = array( 
	"Dell" => array("Price" => 5000 , "Ram" => "4 GB" , "Hard" => "500 GB" ),
	"Hp" => array ("Price" => 6000 , "Ram" => "4 GB" , "Hard" => "500 GB"),
	"Asser" => array ("Price" => 4000 , "Ram" => "4 GB" , "Hard" => "500 GB")
 );
foreach ($laptop as $keys => $values) {
	foreach ($values as $key => $value) {
		echo "[$keys] " . "[ $key ] " . $value . "<br>";
	}
	echo "<br>";
}

?>