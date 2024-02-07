<?php
/*
Implement the function unique_in_order which takes as argument a sequence and returns
a list of items without any elements with the same value next to each other
and preserving the original order of elements.

For example:

uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
uniqueInOrder([1,2,2,3,3])       == {1,2,3}

 */
function uniqueInOrder(string|array $iterable): array
{
    if (empty($iterable)) {
        return [];
    }

    if (is_string($iterable)) {
        $iterable = str_split($iterable);
    }

    $result = [];
    $length = count($iterable);

    for ($i = 0; $i < $length; $i++) {
        if ($i === 0 || $iterable[$i] !== $iterable[$i - 1]){
            $result[] = $iterable[$i];
        }
    }

    return $result;
}

print_r(uniqueInOrder("AAAABBBCCDAABBB")); // ['A','B','C','D','A','B']
print_r("\n");
print_r(uniqueInOrder("ABBCcAD")); // ['A', 'B', 'C', 'c', 'A', 'D']
print_r("\n");
print_r(uniqueInOrder([1,2,2,3,3])); // [1,2,3]
print_r("\n");
var_dump(uniqueInOrder([]));
print_r("\n");