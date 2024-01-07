<?php
/*
Complete the solution so that it splits the string into pairs of two characters.
If the string contains an odd number of characters then it should replace 
the missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']
*/

// first variation
// function solution($str) {
//     $tmp = $str;
//     $arr = array();

//     //todo #1 count string length    
//     $len = strlen($tmp);

//     //todo #2 check if length odd or even, add underscore to odd number
//     if ($len == 0) {
//         return $arr;
//     } elseif ($len % 2 != 0) {
//         $tmp .= "_";
//     }

//     //todo #3 split string to array
//     for ($i = 0; $i < $len; $i+=2) {
//        $arr[] = substr($tmp, $i, 2);
//     }

//     return $arr;
// }

function solution($str) {
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
?>