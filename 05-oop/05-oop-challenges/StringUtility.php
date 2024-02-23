<?php

class StringUtility
{

    public static function shout($string)
    {
        echo strtoupper($string) . '!';
    }

    public static function whisper($string)
    {
        echo strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2)
    {
        echo str_repeat($string, $times);
    }
}

$stringUtility1 = new StringUtility();

$stringUtility1->shout('hello');
$stringUtility1->whisper('Hello');
$stringUtility1->repeat('Hello');
