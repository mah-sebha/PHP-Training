<?php
/**
 * String Functions
 */

// String Length
$text = "Hello, World!";
$length = strlen($text);
echo $length; // Output: 13

// String Case Conversion
$lowercase = strtolower($text);
$uppercase = strtoupper($text);
echo $lowercase; // Output: hello, world!
echo $uppercase; // Output: HELLO, WORLD!

// String Substring
$text = "Hello, World!";
$substring = substr($text, 7, 5);
echo $substring; // Output: World

// String Formatting
$text = "  Hello, World!  ";
$trimmed = trim($text);
$replaced = str_replace("World", "PHP", $text);
$formatted = sprintf("Welcome, %s!", $trimmed);
echo $trimmed; // Output: Hello, World!
echo $replaced; // Output: Hello, PHP!
echo $formatted; // Output: Welcome, Hello, World!!

// Searching Strings
$str = 'abcdef';
echo strpos($str, 'c'); // Output: 2

// Matching Strings
$a = "PHP";
$b = "developer";
if ($a > $b) {
   echo "$a > $b";
} else {
   echo "$a < $b";
}
/* Output: PHP < developer
The ASCII value of "P" (from "PHP") is 80.
The ASCII value of "d" (from "developer") is 100.
Therefore, "P" < "d". */

// Replacing Strings
echo str_replace('foo', 'goo', 'Delicious food'); // output: Delicious good
$bodytag = str_ireplace("%body%", "black", "<body text=%BODY%>");
echo $bodytag; // <body text=black>