<?php
/*
 Simple, given a string of words, return the length of the shortest word(s).

String will never be empty, and you do not need to account for different data types.

 */
function findShort(string $str): int
{
    $tmpArr = explode(" ", $str);
    $newArr = array_map(function ($word) {
        return strlen($word);
    }, $tmpArr);

    return min($newArr);
}
var_dump(findShort("bitcoin take over the world maybe who knows perhaps")); // 3
var_dump(findShort("turns out random test cases are easier than writing out basic ones")); // 3
var_dump(findShort("Let's travel abroad shall we")); // 2