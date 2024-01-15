<?php

/*

Given an array of strings strs, group the anagrams together. You can return the answer in any order.

An Anagram is a word or phrase formed by rearranging the letters of a different word or phrase,
typically using all the original letters exactly once.

Example 1:

Input: strs = ["eat","tea","tan","ate","nat","bat"]
Output: [["bat"],["nat","tan"],["ate","eat","tea"]]

Example 2:

Input: strs = [""]
Output: [[""]]

Example 3:

Input: strs = ["a"]
Output: [["a"]]


Constraints:

    1 <= strs.length <= 104
    0 <= strs[i].length <= 100
    strs[i] consists of lowercase English letters.

*/

function groupAnagrams($strs): array
{
    $answer = array();

    foreach ($strs as $word) {
        $splittedWord = str_split($word);
        sort($splittedWord);
        $implodedWord = implode("", $splittedWord);
        $answer[$implodedWord][] = $word;
    }   
    return array_values($answer);
}

$strs4 =["check","1ba","trio","kecch","ab1","rito","troi", "chaka", "hacka"];
$result4 = groupAnagrams($strs4);
print_r($result4);


$strs1 = ["eat","tea","tan","ate","nat","bat"];
$result1 = groupAnagrams($strs1);
print_r($result1);
