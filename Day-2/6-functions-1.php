<?php
function separator() {
    echo "\n-----\n";
}

echo '<pre>';
// Function Definition and Arguments
function add($num1, $num2) {
    return $num1 + $num2;
}

echo add(5, 3); // Output: 8
echo separator();


// Variadics (Variable Number of Arguments)

function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4); // Output: 10
echo separator();


// Return Statement

function isEven($number) {
    return $number % 2 == 0;
}

echo isEven(4) ? 'Even' : 'Odd'; // Output: Even
echo separator();

// References
function addFive(&$number) {
    $number += 5;
}

$value = 10;
addFive($value);
echo $value; // Output: 15
echo separator();

// Type Hinting

function concatenate(string $str1, string $str2): string {
    return $str1 . $str2;
}

echo concatenate("Hello, ", "World!"); // Output: Hello, World!
echo separator();

// Variable Scope

$globalVar = 5;

function testScope() {
    $localVar = 10;
    // Can't access $globalVar without global keyword
    return $localVar;
}

echo testScope(); // Output: 10
echo separator();

// Closures

$greet = function($name) {
    return "Hello, $name!";
};

echo $greet("Alice"); // Output: Hello, Alice!
echo separator();


echo "</pre>";