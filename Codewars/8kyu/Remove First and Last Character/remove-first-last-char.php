<?php
/*
 It's pretty straightforward. Your goal is to create a function
that removes the first and last characters of a string.
You're given one parameter, the original string.
You don't have to worry about strings with less than two characters.
 */
function remove_char(string $s): string
{
    return substr($s, 1, -1);
}

$var1 = "eloquent"; // "loquen"
$var2 = "country"; // "ountr"
$var3 = "person"; // "erso"
$var4 = "place"; // "lac"

$answer1 = remove_char($var1);
$answer2 = remove_char($var2);
$answer3 = remove_char($var3);
$answer4 = remove_char($var4);

print_r($answer1 . "\n"
    . $answer2 . "\n"
    . $answer3 . "\n"
    . $answer4 . "\n");