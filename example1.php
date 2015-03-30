<?php

/*
 * Example 1:
 * 1. Take two variables
 * 2. Assign different numbers to these variables
 * 3. Comapre these variables and find the highest value
 */


$firstNumber = 4;
$secondNumber = 4;

if($firstNumber > $secondNumber){
	echo "First Number is Greater";
} else if($firstNumber == $secondNumber) {
	echo "Both number are equal";
} else {
	echo "Second Number is Greater";
}

echo "<br />";

$name1 = "Kamran";
$name2 = "kamran";

if($name1 == $name2){
	echo "Equal <br />";
	echo $name1;
} else {
	echo "Not equal";
}