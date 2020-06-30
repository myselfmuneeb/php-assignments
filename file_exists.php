<?php

$filename = "sample.txt";
if (file_exists($filename)) {
	echo "FILE FOUND";
}else{echo "FILE NOT FOUND";}

?>