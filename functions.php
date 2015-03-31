<?php

function redirect_to( $location = NULL ) {
      // Function to redirect to other pages
    if ($location != NULL) {
      header("Location: {$location}");
      exit;
    }
}


// redirect_to("http://www.google.com.pk");

function calculate_grade($marks_array = array()){
	foreach ($marks_array as $marks) {
		# code...
		if($marks <= 100 && $marks >= 80){
			echo $marks . " makes grade of A <br />"; 

		} else if ($marks < 80 && $marks >= 70){
			echo $marks . " makes grade of B <br />"; 

		} else if ($marks < 70 && $marks >= 60){
			echo $marks . " makes grade of C <br />"; 

		} else if ($marks < 60 && $marks >= 50){
			echo $marks . " makes grade of D <br />"; 

		} else if ($marks > 100 || $marks < 0){
			echo "Marks not correct <br />"; 

		} else {
			echo $marks . " makes grade of F <br />"; 

		}
	}
}


$marks_array = array(45, 94, 81, 41, 82);

calculate_grade($marks_array);

$marks_array = array(20, 30, 40, 50, 60);

calculate_grade($marks_array);

$marks_array = array(70, 75, 80, 85, 90);

calculate_grade($marks_array);