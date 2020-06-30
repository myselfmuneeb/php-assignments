<?php

$arr = stat("sample.txt");
foreach ($arr as $key => $value) {
	echo "Indux NO ($key) = $value <br" ;
}
?>