<?php

$handle = fopen("sample.txt", "rb");
$b_leanth = fread($handle, filesize("sample.txt"));
$leanth = str_replace("\n", "<br />", $b_leanth);
echo $leanth;

?>