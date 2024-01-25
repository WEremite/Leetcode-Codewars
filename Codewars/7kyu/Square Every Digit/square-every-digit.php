<?php
/*
 Welcome. In this kata, you are asked to square every digit of a number and concatenate them.

For example, if we run 9119 through the function, 811181 will come out

 */
function square_digits($num): int
{
    $tmpArr = str_split($num);

    $squareArr = array_map(function ($digit){
        return $digit * $digit;
    }, $tmpArr);

    $answer = (int) implode("", $squareArr);

    return $answer;
}

$int1 = 9119;
$int2 = 24680;
$int3 = 13579;
$int4 = 0;

print_r(
        square_digits($int1) . "\n"
            . square_digits($int2) . "\n"
            . square_digits($int3) . "\n"
            . square_digits($int4)
);
