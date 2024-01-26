<?php
/*
 This time no story, no theory. The examples below show you how to write function accum:
Examples:

accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"

The parameter of accum is a string which includes only letters from a..z and A..Z.

 */
function accum(string $s): string
{
    $splittedString = str_split($s);
    $answer = [];

    foreach ($splittedString as $key => $value) {
        $answer[] = ucwords(str_repeat(strtolower($value), $key + 1));
    }

    return implode("-", $answer);
}


$var1 = accum("ZpglnRxqenU"); // "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu"
print_r($var1 . "\n");

$var2 = accum("abcd"); // "A-Bb-Ccc-Dddd"
print_r($var2);