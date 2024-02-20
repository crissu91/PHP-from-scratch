<?php

function add($a, $b)
{
    return $a + $b;
}

echo add(1, 2);
echo '<br />';
echo add(100, 200);

function sayHello($name = 'World')
{
    return 'Hello' . $name;
}

echo sayHello();

function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo addAll(1, 2, 3, 4, 5, 6);
