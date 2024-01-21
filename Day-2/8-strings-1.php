<?php

// Declaring Strings
$name = 'Mohamed';
$a = 'Hello $name\n';
$b = "Hello $name\n";
echo $a; // Hello $name\n
echo $b; // Hello Mohamed

// Embedding Variables
echo 'My name is $name'; // My name is $name
echo 'My name is ' . $name; // My name is Mohamed
echo "My name is $name"; // My name is Mohamed
echo "My name is {$name}"; // My name is Mohamed

// String Concatenation
$firstName = "Mohamed";
$lastName = "Ahmed";
$fullName = $firstName . " " . $lastName;
echo $fullName; // Output: Mohamed Ahmed

// Extracting Strings
$string = 'abcdef';
echo $string[0];

// Referencing Characters
$hello = "world";
echo $hello[0]; // w

$hello[10] = "*";
echo $hello; //  world     *

// Add String to Existing Strings
$word = "hello";
$word .= "more text";
$word = $word . "more text";
