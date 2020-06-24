<?php

$data = file_get_contents("sample.txt");
$impdata = str_replace("\n", "<br />", $data , $i);
echo $impdata . "<br />" . $i;

?>