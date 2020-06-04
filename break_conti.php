<?php

for ($i=1; $i <= 5 ; $i++) { 
	echo "Hello : " . $i . "<br>";
	if ($i == 2) {
		break;
	}
}
for ($i=1; $i <= 5 ; $i++) { 
	
	if ($i == 2)
		continue;
	
	echo "Bye :" . $i . "<br>";
}

?>