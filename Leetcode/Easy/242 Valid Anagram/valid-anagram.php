<?php

/*

Given two strings s and t, return true if t is an anagram of s, and false otherwise.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase, 
typically using all the original letters exactly once. 

Example 1:

Input: s = "anagram", t = "nagaram"
Output: true

Example 2:

Input: s = "rat", t = "car"
Output: false


Constraints:

    1 <= s.length, t.length <= 5 * 104
    s and t consist of lowercase English letters.


Follow up: What if the inputs contain Unicode characters? How would you adapt your solution to such a case?


*/

function isAnagram($s, $t) {
    return (count_chars($s) == count_chars($t));
}

print_r(isAnagram("anagram", "nagaram")); // true
print_r(isAnagram("rat", "car")); // false
print_r(isAnagram("1ab!", "!ba1")); // true


?>