<?php
	//Variables
	$first_var = 12;
	$firstVar = "Dogs";
	$firstvar = 'Cats,Dogs,Elephant';

	// //Var Dump
	var_dump($firstvar);

	// //Cancatination
	echo $first_var . "<br>";
	echo $firstVar . "<br>";
	echo $firstvar . "<br>";
	
	// //String Fuctions
	echo addcslashes("Hamid " . "Khan", 'A..z');
	$split_array = explode(',', $firstvar);
	var_dump($split_array);

	// //Integers and Doubles
	$first_number = 12;
	$sec_number = 43;

	// //Maths Functions
	$sum = sin($sec_number);
	echo $sum;

	// //Arrays
	$stud = array();
	$stud[0] = 'Ali';
	$stud[1] = 'Hamid';
	$stud[2] = 'Arsalan';

	$students = {'Ali', 'Hamid', 'Arsalan'};

	// //Associative Arrays
	$stud = array();
	$stud['first'] = 'Ali';
	$stud['second'] = 'Hamid';
	$stud['third'] = 'Arsalan';

	$students = {'first' => 'Ali', 'second' =>  'Hamid', 'third' =>  'Arsalan'}

	$status = NULL;

	$status = true;
	$status = false;

	$marks = 50;

	if($marks >= 80){
		echo "Grade A";
	} else if($marks < 80 && $marks >= 70){
		echo "Grade B";
	} else if($marks < 70 && $marks >= 60){
		echo "Grade C";
	}  else if($marks < 60 && $marks >= 50){
		echo "Grade D";
	} else {
		echo "Fail";
	}


	echo "<br />";
	// Switch Statement
	$grade = 'B';
	switch ($grade) {
		case 'A':
			echo "Marks from 80-90";
			break;
		
		case 'B':
			echo "Marks from 70-80";
			break;
		
		case 'C':
			echo "Marks from 60-70";
			break;
		
		case 'D':
			echo "Marks from 50-60";
			break;
		
		default:
			echo "Unknown Grade given...";
			break;
	}
