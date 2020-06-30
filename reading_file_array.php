<?php

$data = file("sample.txt");
foreach ($data as $key => $line) {
	echo $key . $line . "<br />";
}

?>