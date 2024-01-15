<?php

/*
 * Given an integer array nums and an integer k, return the k most frequent elements.
 * You may return the answer in any order.

Example 1:

Input: nums = [1,1,1,2,2,3], k = 2
Output: [1,2]
Example 2:

Input: nums = [1], k = 1
Output: [1]

Constraints:

1 <= nums.length <= 105
-104 <= nums[i] <= 104
k is in the range [1, the number of unique elements in the array].
It is guaranteed that the answer is unique.

Follow up: Your algorithm's time complexity must be better than O(n log n), where n is the array's size.

*/

function topKFrequent($nums, $k): array
{
    $tmpArr = array_count_values($nums);
    arsort($tmpArr);

    return  array_slice(array_keys($tmpArr), 0, $k);
}

$nums = [3,2,1,2,1,1];
$k = 2;
$result1 = topKFrequent($nums, $k);
print_r($result1);

$nums = [1];
$k = 1;
$result2 = topKFrequent($nums, $k);
print_r($result2);

$nums = [3,0,1,0];
$k = 1;
$result3 = topKFrequent($nums, $k);
print_r($result3);

$nums = [4,1,-1,2,-1,2,3];
$k = 2;
$result4 = topKFrequent($nums, $k);
print_r($result4);