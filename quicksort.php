<?php

function getRandomArray(int $length): array
{
    $array = [];

    while ($length--) {
        $array[] = random_int(10, 99);
    }

    return $array;
}

function quickSort(array $array): array
{
    $arrayLength = count($array);

    if ($arrayLength < 2) {
        return $array;
    }

    $pivot = $array[0];

    $left = [];
    $right = [];

    // we've got element with index 0 as pivot that's why we start loop from index 1
    for ($i = 1; $i < $arrayLength; $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$array = getRandomArray(10);
$sortedArray = quickSort($array);

echo 'Array: ' . PHP_EOL . implode(', ', $array) . PHP_EOL . PHP_EOL .
     'Sorted array: ' . PHP_EOL . implode(', ', $sortedArray) . PHP_EOL;

