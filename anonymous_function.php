<?php

// Anonymous Function

$a = function (){
	echo "I am Nrmal Anonymous Function <br />";
};
$a();
 // Variable Scope in Anonymous Function

$x = "Variable Scope in Anonymous Function";
$r = " = ";

$y = function ($q) use ($x){
	echo "This is " . $q . $x . "<br />";
};

$y($r);

// Passing Anonymous Function as Argument

function pass($q){
	return $q();
}

echo pass( function(){
	return "Passing Anonymous Function as Argument <br />";
});


// Returning Anonymous Function

function rut($q){
	return  function($q2) use ($q){
				return $q . $q2 . "Returning Anonymous Function";
			};
}

$u = rut("This is ");
echo $u("= ");


?>