<?php

/*
 Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.
Examples (input -> output)

6, "I"     -> "IIIIII"
5, "Hello" -> "HelloHelloHelloHelloHello"
 */

function repeatStr($n, $str): string
{
    return str_repeat($str, $n);
}

$answer1 = repeatStr(3, "*"); // "***"
$answer2 = repeatStr(2, "@"); // "@@"
$answer3 = repeatStr(1, "!"); // "!"
$answer4 = repeatStr(5, "Hello"); // "HelloHelloHelloHelloHello"

print_r($answer1 . "\n"
    . $answer2 . "\n"
    . $answer3 . "\n"
    . $answer4 . "\n");