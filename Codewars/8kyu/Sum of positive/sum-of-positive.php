<?php

/*
 You get an array of numbers, return the sum of all of the positives ones.

Example [1,-4,7,12] => 1 + 7 + 12 = 20

Note: if there is nothing to sum, the sum is default to 0.

 */
function positive_sum($arr): float
{
    $answer = 0;

    $answer += array_sum(array_filter($arr, function ($num) {
        return $num > 0;
    }));

    return $answer;
}

$var1 = [1, 2, 3, 4, 5]; // 15
$var2 = [1, -2, 3, 4, 5]; // 13
$var3 = [-1, -2, 0.3]; // 0
$var4 = [-1, -2, -3, -4, -5]; // 0

$answer1 = positive_sum($var1);
$answer2 = positive_sum($var2);
$answer3 = positive_sum($var3);
$answer4 = positive_sum($var4);

print_r($answer1 . "\n"
            . $answer2 . "\n"
            . $answer3 . "\n"
            . $answer4 . "\n");