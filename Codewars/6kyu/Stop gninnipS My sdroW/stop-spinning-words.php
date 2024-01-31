<?php
/*
 * Write a function that takes in a string of one or more words, and returns the same string,
 * but with all words that have five or more letters reversed (Just like the name of this Kata).
 * Strings passed in will consist of only letters and spaces.
 * Spaces will be included only when more than one word is present.

Examples:

"Hey fellow warriors"  --> "Hey wollef sroirraw"
"This is a test        --> "This is a test"
"This is another test" --> "This is rehtona test"


 */
function spinWords(string $str): string
{
    $tmpArr = explode(" ", $str);

    $newArr = array_map(function ($word){
        return (strlen($word) >= 5) ? strrev($word) : $word;
    }, $tmpArr);

    $solution = implode(" ", $newArr);
    
    return $solution;
}

var_dump(spinWords("Welcome")); //emocleW
var_dump(spinWords("Hey fellow warriors")); //Hey wollef sroirraw
