<?php

$names = array('John', 'Jill', 'Jack');
$numbers = [1, 2, 3, 4, 5];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre';
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo ($names[2]);

$numbers[5] = 100;
$numbers[] = 101;

$numbers[3] = 200;

unset($numbers[3]);

$numbers = array_values($numbers); //to reasign indexes
inspect($numbers);
