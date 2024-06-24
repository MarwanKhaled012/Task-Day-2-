<?php
// Lower case 
$str = "Hello  WORLD ";
$str_1 = strtolower($str); 

// split the string
$str_2 = substr($str, 7);

// length of the string 
$str_3 =strlen($str); 

echo ($str_1 .'   '. $str_2 .'   '. $str_3) ;