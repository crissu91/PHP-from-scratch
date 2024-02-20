<?php

$numbers = [1, 2, 3, 4, 5];
$square = function ($number) {
    return $number * $number;
};

$squareNumbers = array_map($square, $numbers);

// print_r($squareNumbers);

function applyCallback($callback, $value)
{
    return $callback($value);
}

$double = function ($number) {
    return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;
