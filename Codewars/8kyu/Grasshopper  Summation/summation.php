<?php
/*
 Summation

Write a program that finds the summation of every number from 1 to num.
The number will always be a positive integer greater than 0.
Your function only needs to return the result, what is shown between parentheses
in the example below is how you reach that result and it's not part of it, see the sample tests.

For example (Input -> Output):

2 -> 3 (1 + 2)
8 -> 36 (1 + 2 + 3 + 4 + 5 + 6 + 7 + 8)
 */
function summation($n): int
{
    return $n * ($n + 1) / 2;
}

$answer1 = summation(2); // "3"
$answer2 = summation(8); // "36"
$answer3 = summation(3); // "6"
$answer4 = summation(4); // "10"
$answer5 = summation(5); // "15"

print_r($answer1 . "\n"
    . $answer2 . "\n"
    . $answer3 . "\n"
    . $answer4 . "\n"
    . $answer5 . "\n");