<?php

$handle = fopen("sample.txt", "r");

while ($char = fgetc($handle)){
if ($char == "\n") {
	$char = "<br />";
}
echo $char;
}
?>