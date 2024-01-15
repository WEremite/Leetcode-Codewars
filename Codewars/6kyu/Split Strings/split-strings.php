<?php
/*
Complete the solution so that it splits the string into pairs of two characters.
If the string contains an odd number of characters then it should replace 
the missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']
*/

function solution($str): array
{
    if ($str == "") {
        return [];
    }

    if (strlen($str) % 2 != 0) {
        $str .= "_";
    }

    return str_split($str, 2);
}

print_r(solution("abc"));
print_r(solution("abcdef"));
print_r(solution(""));
