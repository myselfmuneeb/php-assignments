<?php
// Max Value

$values = array(30 ,1 , 2 , 3 , 4 , 5 , 6 , 20 );
$maxvalue = $values[0];

for ($i=0; $i <count($values) ; $i++) { 
	
	if ($maxvalue<$values[$i]) {
		$maxvalue = $values[$i];
	}
}
echo $maxvalue;
?>