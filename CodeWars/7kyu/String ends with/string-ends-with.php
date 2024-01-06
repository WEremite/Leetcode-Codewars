<?php
/*

Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

Examples:

solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false


*/

// first variation
// function solution($str, $ending) {
//     $str_ending = substr($str, -(strlen($ending)));

//     if ($ending == "") {
//         return true;
//     } elseif (strlen($ending) > strlen($str)) {
//         return false;
//     } elseif ($str_ending == $ending) {
//         return true;
//     } else {
//         return false;
//     }

// }

// second variation
function solution(string $str, string $ending): bool {
  return str_ends_with($str, $ending);
}

print_r(solution('abc', 'bc')); // returns true
print_r(solution('abc', 'd')); // returns false
print_r(solution('yes this will pass', '')); // returns true
print_r(solution("abc", "abcd")); // returns false
print_r(solution("abc\n", 'abc')); // returns false
?>