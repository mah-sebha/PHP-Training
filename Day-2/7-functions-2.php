<?php

function arrayManipulator(array &$arr, string $operation, ...$args) {
    // Variable scope: $result is local to this function
    $result = [];

    switch ($operation) {
        case 'add':
            foreach ($args as $value) {
                $arr[] = $value; // Demonstrates references (modifying original array)
            }
            break;

        case 'filter':
            // Closure: uses a function to filter the array
            $filterFunc = $args[0];
            $arr = array_filter($arr, $filterFunc);
            break;

        case 'sum':
            // Return: sum of all elements in the array
            return array_sum($arr);

        // Add more operations as needed
    }

    return $arr;
}

// Example Usage
$myArray = [1, 2, 3];

// Add elements
arrayManipulator($myArray, 'add', 4, 5);
print_r($myArray);

// Filter array using a closure
arrayManipulator($myArray, 'filter', function($value) { return $value > 2; });
print_r($myArray);

// Get sum of elements
echo "Sum: " . arrayManipulator($myArray, 'sum');
