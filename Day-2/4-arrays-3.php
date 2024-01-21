<?php
$numericArray = array(10, 20, 30, 40, 50);
$shortNumericArray = [10, 20, 30, 40, 50];
$associativeNumericArray = ['a' => 10, 'b' => 20, 'c' => 30, 'd' => 40];
$nestedArray = ['10' => ['b' => 10, 'c' => 20], '20' => ['e' => 30, 'f' => 40]];
// Accessing elements
$firstElement = $numericArray[0];
$thirdElement = $numericArray[2];
// Modifying elements
$numericArray[1] = 25; // Modify the second element to be 25
$numericArray[4] += 10; // Increment the fifth element by 10
// Modifying array
$associativeNumericArray['c'] = 50; // Modify element
// Modifying nested array
$nestedArray['20']['f'] = 50; // Modify nested element
$nestedArray['30'] = ['g' => 60]; // Add new element

echo "<pre>";

print_r($numericArray);
print_r($shortNumericArray);
print_r($associativeNumericArray);
print_r($nestedArray);

echo "</pre>";