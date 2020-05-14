<?php

	$total_score = 100;
	$score = 85;
	$score_per = $score /$total_score * 100;

	switch ($score_per) {
		case $score>$total_score:
			echo "Total marks are " . $total_score . " so score should be less than total marks!";
			break;
		case $score_per<'50%':
			echo "You are fail because you got less then 50%. Grade: F";
			break;
		case $score_per<'60%':
			echo "You are pass. Grade: D";
			break;
		case $score_per<'70%':
			echo "You are pass. Grade: C";
			break;
		case $score_per<'80%':
			echo "You are pass. Grade: B";
			break;			
		case $score_per<'90%':
			echo "You are pass. Grade: A";
			break;
		case $score_per<='100%':
			echo "You are pass. Grade: A+";
			break;				
	
	}		
	
	