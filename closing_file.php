<?php

$handel = fopen("sample.txt", "r");
while (!feof($handel)) {
	$data = fgets($handel);
	echo $data . "<br />";
}
fclose($handel);

?>