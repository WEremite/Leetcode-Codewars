<?php
/*
 Very simple, given an integer or a floating-point number, find its opposite.

Examples:

1: -1
14: -14
-34: 34

 */
function opposite($n): float|int
{
    return -$n;
}

$var1 = 1; // -1
$var2 = 1.4; // -1.4
$var3 = -34; // 34

$answer1 = opposite($var1);
$answer2 = opposite($var2);
$answer3 = opposite($var3);

print_r($answer1 . "\n"
            . $answer2 . "\n"
            . $answer3 . "\n");