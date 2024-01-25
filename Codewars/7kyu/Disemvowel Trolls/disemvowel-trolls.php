<?php
/*
 Trolls are attacking your comment section!

A common way to deal with this situation is to remove
all of the vowels from the trolls' comments, neutralizing the threat.

Your task is to write a function that takes a string and return a new string with all vowels removed.

For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".

Note: for this kata y isn't considered a vowel.

 */
function disemvowel($string): string
{
    // Code goes here...
    $pattern = ["a", "i", "e", "o", "u", "A", "I", "E", "O", "U"];
    return str_replace($pattern, "", $string);
}

$str1 = "This website is for losers LOL!";
print_r(disemvowel($str1) . "\n");

$str2 = "No offense but,\nYour writing is among the worst I've ever read";
print_r(disemvowel($str2));