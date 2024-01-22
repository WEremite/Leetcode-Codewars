<?php

/*
 Complete the method that takes a boolean value and
return a "Yes" string for true, or a "No" string for false.
 */
function boolToWord($bool): string
{
    return ($bool) ? "Yes" : "No";
}

$var1 = true; // "Yes"
$var2 = false; // "No"

$answer1 = boolToWord($var1);
$answer2 = boolToWord($var2);


print_r($answer1 . "\n" . $answer2 . "\n");