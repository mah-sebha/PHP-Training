<?php
$numbers = [1, 2, 3, 4, 5];
echo "Total elements: " . count($numbers) . "<br>";
array_push($numbers, 6, 7); // Add 6 and 7 to the end of the array
$lastElement = array_pop($numbers); // Remove the last element
echo "New array: " . implode(", ", $numbers) . "<br>"; // Output: Last array: 1, 2, 3, 4, 5
echo "Last element: " . $lastElement . "<br>"; // Output: Last element: 7
$mergedArray = array_merge($numbers, [8, 9]); // Merge 8 and 9 to the end of the array
$slicedArray = array_slice($mergedArray, 2, 4); // Slice the array from index 2 to index 4
$key = array_search(4, $slicedArray); // Find the key of the value 4
echo "Merged array: " . implode(", ", $mergedArray) . "<br>"; // Output: Merged array: 1, 2, 8, 9
echo "Sliced array: " . implode(", ", $slicedArray) . "<br>"; // Output: Sliced array: 8, 9
echo "Key of value 4: " . $key . "<br>"; // Output: Key of value 4: 1

