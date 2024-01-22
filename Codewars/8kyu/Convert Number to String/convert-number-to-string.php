<?php

/*
 We need a function that can transform a number (integer) into a string.

What ways of achieving this do you know?
Examples (input --> output):

123  --> "123"
999  --> "999"
-100 --> "-100"
 */

function numberToString($num): string
{
    return "$num";
}

$var1 = 123; // "123"
$var2 = 999; // "999"
$var3 = -100; // "-100"

$answer1 = numberToString($var1);
$answer2 = numberToString($var2);
$answer3 = numberToString($var3);

var_dump($answer1);

//print_r($answer1 . "\n"
//            . $answer2 . "\n"
//            . $answer3 . "\n");