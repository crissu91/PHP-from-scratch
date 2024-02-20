<?php

//Global scope

$name = 'Alice';

function sayHello()
{
    global $name;
    //Local scope
    $name = 'Bob';
    echo 'Hello ' . $name;
}

echo $name;

sayHello();


function sayGoodbye()
{
    $names = ['JAck', 'Jill'];
    echo 'Goodbye ' . $names[0];
}

sayGoodbye();
