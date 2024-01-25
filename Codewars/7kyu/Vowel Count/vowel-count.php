<?php
/*
 Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.

 */
function getCount($str): int
{
    $pattern = "/[aeiou]/i";

    return preg_match_all($pattern, $str);
}

$str1 = "abracadabra";
$answer = getCount($str1);
print_r($answer);

