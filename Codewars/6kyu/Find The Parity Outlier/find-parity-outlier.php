<?php
/*
You are given an array (which will have a length of at least 3, but could be very large)
containing integers. The array is either entirely comprised of odd integers or
entirely comprised of even integers except for a single integer N. Write a method
that takes the array as an argument and returns this "outlier" N.
Examples

[2, 4, 0, 100, 4, 11, 2602, 36] -->  11 (the only odd number)

[160, 3, 1719, 19, 11, 13, -21] --> 160 (the only even number)


 */
function find(array $integers): int
{
    $tmpArr = [];

    foreach ($integers as $integer) {
        if($integer % 2 === 0) {
            $tmpArr[] = $integer;
        }
    }

    if (count($tmpArr) === 1) {
        return $tmpArr[0];
    } else {
        return current(array_diff($integers, $tmpArr));
    }
}

print_r(find([100, 101, 102])); // 101
print_r("\n");
print_r(find([1, 9, 27, 81, 100])); // 100
print_r("\n");
print_r(find([2, 4, 0, 100, 4, 11, 2602, 36])); // 11
print_r("\n");