<?php

/*
 Create a function that takes an integer as an argument
and returns "Even" for even numbers or "Odd" for odd numbers.
 */
function even_or_odd(int $n): string
{
    return ($n % 2 == 0) ? "Even" : "Odd"; // Your code here
}

$test = [0, 1, 2, -1, -2];
foreach ($test as $value) {
    print_r(even_or_odd($value));
}
