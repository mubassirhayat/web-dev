<?php
function grade($marks_array = array()){
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

$a1 = array(45,94,81,41,82);

grade($a1);