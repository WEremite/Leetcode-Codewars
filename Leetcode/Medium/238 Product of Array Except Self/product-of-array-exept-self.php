<?php

/*
 Given an integer array nums, return an array answer such that answer[i]
 is equal to the product of all the elements of nums except nums[i].

The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.

You must write an algorithm that runs in O(n) time and without using the division operation.



Example 1:

Input: nums = [1,2,3,4]
Output: [24,12,8,6]
Example 2:

Input: nums = [-1,1,0,-3,3]
Output: [0,0,9,0,0]


Constraints:

2 <= nums.length <= 105
-30 <= nums[i] <= 30
The product of any prefix or suffix of nums is guaranteed to fit in a 32-bit integer.


Follow up: Can you solve the problem in O(1) extra space complexity?
(The output array does not count as extra space for space complexity analysis.)
 */

function productExceptSelf($nums): array
{
    $length = count($nums);
    $answer = array_fill(0, $length, 1);

     // calculate left
    $left = 1;
    for ($i = 0; $i < $length; $i++) {
        $answer[$i] *= $left;
        $left *= $nums[$i];
    }

    // calculate right
    $right = 1;
    for ($j = $length - 1; $j >= 0; $j--) {
        $answer[$j] *= $right;
        $right *= $nums[$j];
    }

    return $answer;
}

$nums = [1,2,3,4];
$result1 = productExceptSelf($nums);
print_r($result1); // expect [24,12,8,6]

$nums = [-1,1,0,-3,3];
$result2 = productExceptSelf($nums);
print_r($result2); // expect [0,0,9,0,0]

$nums = [2, 3, 4, 5, 6];
$result2 = productExceptSelf($nums);
print_r($result2); // expect [360,240,180,144,120]