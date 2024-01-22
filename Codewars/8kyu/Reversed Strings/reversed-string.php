<?php

/*
 Complete the solution so that it reverses the string passed into it.

'world'  =>  'dlrow'
'word'   =>  'drow'
 */
function solution($str): string
{
    return strrev($str);
}

$var1 = "world"; // "dlrow"
$var2 = "hello"; // "olleh"
$var3 = ""; // ""
$var4 = "h"; // "h"

$answer1 = solution($var1);
$answer2 = solution($var2);
$answer3 = solution($var3);
$answer4 = solution($var4);

print_r($answer1 . "\n"
    . $answer2 . "\n"
    . $answer3 . "\n"
    . $answer4 . "\n");