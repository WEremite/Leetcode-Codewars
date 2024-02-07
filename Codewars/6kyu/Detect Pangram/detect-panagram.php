<?php
/*
A pangram is a sentence that contains every single letter of the alphabet at least once.
For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram,
because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram.
Return True if it is, False if not. Ignore numbers and punctuation.

 */
function detect_pangram(string $string): bool
{
    $lowerString = strtolower($string);
    $alphabet = range("a", "z");

    foreach ($alphabet as $letter) {
        if (!str_contains($lowerString, $letter)) {
            return false;
        }
    }

    return true;
}

var_dump(detect_pangram("The quick brown fox jumps over the lazy dog.")); // true
var_dump(detect_pangram("A pangram is a sentence that contains every single letter of the alphabet at least once.")); // false