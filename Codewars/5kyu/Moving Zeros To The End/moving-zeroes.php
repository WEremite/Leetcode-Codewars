<?php
/*
Write an algorithm that takes an array and moves all of the zeros to the end,
preserving the order of the other elements.

moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

 */
function moveZeros(array $items): array
{
    $sortedArray = [];
    $counter = 0;

    foreach ($items as $item) {
        if ($item !== 0 && $item !== 0.0) {
            $sortedArray[] = $item;
        } else {
            $counter++;

        }
    }

    while ($counter > 0) {
        $sortedArray[] = 0;
        $counter--;
    }

    return $sortedArray;
}

print_r(moveZeros([false,1,0,1,2,0,1,3,"a"])); // [false,1,1,2,1,3,"a",0,0]
print_r("\n");
print_r(moveZeros([1,2,0,1,0,1,0,3,0,1])); // [1,2,1,1,3,1,0,0,0,0]
print_r("\n");
print_r(moveZeros(["a",0,0,"b","c","d",0,1,0,1,0,3,0,1,9,0,0,0,0,9])); // ["a","b","c","d",1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0]
print_r("\n");
print_r(moveZeros([0,1,null,3])); // [1,null,3,0]
print_r("\n");
print_r( moveZeros(["a","b"])); // ["a","b"]
print_r("\n");
print_r(moveZeros([9,0.0,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9])); // [9,9,1,2,1,1,3,1,9,9,0,0,0,0,0,0,0,0,0,0]
print_r("\n");
print_r(moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9])); // ["a","b",null,"c","d",1,false,1,3,[],1,9,9,0,0,0,0,0,0,0,0,0,0]