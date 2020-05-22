<?php

$total_score = 100;
$score =69;
$score_per = $score /$total_score * 100;

if ($score<$total_score) {
	if ($score_per >= 90) {
		echo "you score is : " . $score . "<br>";
		echo "You are pass. Grade: A+";
	}
	elseif ($score_per >= 80){
		echo "you score is : " . $score . "<br>";
		echo "You are pass. Grade: A";
	}
	elseif ($score_per >= 70){
		echo "you score is : " . $score . "<br>";
		echo "You are pass. Grade: B";
	}
	elseif ($score_per >= 60){
		echo "you score is : " . $score . "<br>";
		echo "You are pass. Grade: C";
	}
	elseif ($score_per >= 50){
		echo "you score is : " . $score . "<br>";
		echo "You are pass. Grade: D";
	}
	elseif ($score_per < 0) {
		echo "Given score $score is invalid";
	}
}else{ echo "Total marks are " . $total_score . " so score should be less than total marks!";}



?>