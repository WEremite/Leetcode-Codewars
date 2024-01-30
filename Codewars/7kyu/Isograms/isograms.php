<?php
/*
 An isogram is a word that has no repeating letters, consecutive or non-consecutive.
Implement a function that determines whether a string that contains only letters is an isogram.
Assume the empty string is an isogram. Ignore letter case.

Example: (Input --> Output)

"Dermatoglyphics" --> true "aba" --> false "moOse" --> false (ignore letter case)

isIsogram "Dermatoglyphics" = true
isIsogram "moose" = false
isIsogram "aba" = false

 */
function isIsogram(string $string): bool
{
    $tmpArr = str_split(strtolower($string));
    $valueOccurrences = array_count_values($tmpArr);
    arsort($valueOccurrences);

     return reset($valueOccurrences) == 1;
}

var_dump(isIsogram("Dermatoglyphics")); // true
var_dump(isIsogram("isogram")); // true
var_dump(isIsogram("aba")); // false
var_dump(isIsogram("moOse")); // false
