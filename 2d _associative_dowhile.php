<?php

$laptop = array( 
	"Dell" => array("Price" => 5000 , "Ram" => "4 GB" , "Hard" => "500 GB" ),
	"Hp" => array ("Price" => 6000 , "Ram" => "4 GB" , "Hard" => "500 GB"),
	"Asser" => array ("Price" => 4000 , "Ram" => "4 GB" , "Hard" => "500 GB")
 );
$keys = array_keys($laptop);
$i = 0;
do{
	$key = array_keys($laptop[$keys[$i]]);
	$j = 0;
	do{
		echo " [ " .$keys[$i] . $key[$j] . " ] " . " " . $laptop[$keys[$i]][$key[$j]];
		$j++;
	}while($j < count($key));
	echo "<br>";
	$i++;
}while($i < count($keys));

?>