<?php

$handel = fopen("sample.txt", "a");

if (fwrite($handel, " New Line") == FALSE){
	echo "INVALID";
}
else{
	echo "COPIED!!";
}


?>