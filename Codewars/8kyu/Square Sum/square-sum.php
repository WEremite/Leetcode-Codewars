<?php
/*
 Complete the square sum function so that it squares each number passed into it and then sums the results together.

For example, for [1, 2, 2] it should return 9 because 1^2+2^2+2^2=9

 */
function square_sum($numbers): int
{
    return array_sum(array_map(function ($num) {
        return $num ** 2;
    }, $numbers));
}

$var1 = [1, 2]; // 5
$var2 = [0, 3, 4, 5]; // 50
$var3 = []; // 0
$var4 = [-1,-2]; // 5

$answer1 = square_sum($var1);
$answer2 = square_sum($var2);
$answer3 = square_sum($var3);
$answer4 = square_sum($var4);

print_r($answer1 . "\n"
    . $answer2 . "\n"
    . $answer3 . "\n"
    . $answer4 . "\n");