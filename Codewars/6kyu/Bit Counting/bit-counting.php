<?php
/*
Write a function that takes an integer as input,
and returns the number of bits that are equal to one in the binary representation of that number.
You can guarantee that input is non-negative.

Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case
 */
function countBits(int $n): int
{
    $binaryNum = decbin($n);
    $countOnes = (int) substr_count($binaryNum, '1');

    return $countOnes;
}

print_r(countBits(0)); // 0
print_r("\n");
print_r(countBits(4)); // 1
print_r("\n");
print_r(countBits(7)); // 3
print_r("\n");