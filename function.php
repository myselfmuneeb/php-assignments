<?php

	function cal(){
		echo "Hello WORLD <br>";
	}
	cal();

	function name($vale_1 , $value_2 , $value_3 = "PAKISTANI"){
		echo "your Name is $vale_1, age is $value_2 and you are $value_3 <br>";
	}

	$name = "Muneeb";
	$age = 25;
	name($name , $age);

	name("Davied" , 20 , "American");

	function data($vale_1 , $value_2 , $value_3 = NULL){
		if ($value_3 == NULL) {
			echo "Invalid DATA";
		}else{echo "I am $vale_1 and $value_2 year's old . I live in $value_3<br>";}
	}
	$name2 = "Muneeb";
	$age2 = 25;
	$city2 = "Lahore";
	data($name2 , $age2 , $city2);
	
?>