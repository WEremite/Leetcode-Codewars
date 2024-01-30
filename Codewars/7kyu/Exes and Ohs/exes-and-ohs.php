<?php
/*
 Check to see if a string has the same amount of 'x's and 'o's.
The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false

 */
function XO(string $s): bool
{
    $lowerCaseString = strtolower($s);
    $occurrenceOfX = "/x/";
    $occurrenceOfO = "/o/";
    $countX = preg_match_all($occurrenceOfX, $lowerCaseString);
    $countO = preg_match_all($occurrenceOfO, $lowerCaseString);

    return $countX == $countO;
}

var_dump(XO("xo")); // true
var_dump(XO("XO")); // true
var_dump(XO("xo0")); // true
var_dump(XO("xxxoo")); // false
var_dump(XO("xxOo")); // true
var_dump(XO("zpzpzpp")); // true
var_dump(XO("zzoo")); // false

