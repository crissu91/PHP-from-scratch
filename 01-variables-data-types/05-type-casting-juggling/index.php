<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true; //1
$bool2 = false; //0
$null = null; //0

//Implicit Conversion
$result = $number1 + $number1;
$result = $number1 + $number3; //integer (string to integer)
$result = $number3 + $number3; // int (string to integer)
$result = $number1 . $number2; // string (int to string)
// $result = $fruit . $number2; // Error
$result = $number1 + $bool1; // integer (6) (bool to int)
$result = $number1 + $bool2; // integer (5) (bool to int)
$result = $number1 + $null; // integer (5) (null to int)

//Explicit Conversion

$result = (string) $number1;
$result = (int) $number3;
$result = (bool) $number1;

var_dump($result);
