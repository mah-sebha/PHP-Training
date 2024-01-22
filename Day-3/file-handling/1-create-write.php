<?php

/** 
 * Create a New File and Write Data to It
 */

$filename = "sample.txt";
$content = "Hello, this is a test file.\n";

// Open the file for writing
$file = fopen($filename, "w");

// Check if file is opened successfully
if ($file === false) {
    echo "Error in opening file";
    exit();
}

// Write content to the file
fwrite($file, $content);

// Close the file
fclose($file);
echo "File created and written successfully.\n";
