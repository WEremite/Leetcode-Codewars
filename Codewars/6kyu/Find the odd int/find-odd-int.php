<?php

/*
 Given an array of integers, find the one that appears an odd number of times.

There will always be only one integer that appears an odd number of times.
Examples

[7] should return 7, because it occurs 1 time (which is odd).
[0] should return 0, because it occurs 1 time (which is odd).
[1,1,2] should return 2, because it occurs 1 time (which is odd).
[0,1,0,1,0] should return 0, because it occurs 3 times (which is odd).
[1,2,2,3,3,3,4,3,3,3,2,2,1] should return 4, because it appears 1 time (which is odd).

 */

function findIt(array $seq): int
{
    if (count($seq) === 1) {
        return $seq[0];
    }

    $tmpArr = array_count_values($seq);

    foreach ($tmpArr as $key => $value) {
        if ($value % 2 !== 0) {
            return $key;
        }
    }

    return 1;
}

print_r(findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5])); // 5
print_r("\n");
print_r(findIt([1,1,2,-2,5,2,4,4,-1,-2,5])); // -1
print_r("\n");
print_r(findIt([10])); // 10
print_r("\n");
print_r(findIt([1,1,1,1,1,1,10,1,1,1,1])); // 10
print_r("\n");
print_r(findIt([20,1,1,2,2,3,3,5,5,4,20,4,5])); // 5