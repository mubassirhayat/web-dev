<?php
 function reminder($a = NULL, $b = NULL){
 	return $a % $b;
 }

 $reminder = reminder(13,2);
var_dump($reminder);
