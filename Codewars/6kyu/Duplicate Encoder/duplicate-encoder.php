<?php
/*
The goal of this exercise is to convert a string to a new string where each character in the new string
is "(" if that character appears only once in the original string, or ")"
if that character appears more than once in the original string. Ignore capitalization when determining
if a character is a duplicate.
Examples

"din"      =>  "((("
"recede"   =>  "()()()"
"Success"  =>  ")())())"
"(( @"     =>  "))(("

Notes

Assertion messages may be unclear about what they display in some languages.
If you read "...It Should encode XXX", the "XXX" is the expected result, not the input!

 */
function duplicate_encode(string $word){
    $lowerString = strtolower($word);
    $solution = "";
    $tmpArr = array_count_values(str_split($lowerString));

    if (max($tmpArr) === 1) {
        return str_repeat("(", strlen($word));
    }

    for ($i = 0; $i < strlen($word); $i++) {
        if ($tmpArr[$lowerString[$i]] > 1) {
            $solution .= ")";
        } else {
            $solution .= "(";
        }
    }

    return $solution;
}

print_r(duplicate_encode("din")); // "((("
print_r("\n");
print_r(duplicate_encode("recede")); // "()()()"
print_r("\n");
print_r(duplicate_encode("Success")); // ")())())"
print_r("\n");
print_r(duplicate_encode("(( @")); // "))(("
print_r("\n");