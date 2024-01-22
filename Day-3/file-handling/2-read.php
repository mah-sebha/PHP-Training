<?php

$file = fopen("sample.txt", "r");
$content = fread($file, filesize("sample.txt"));
fclose($file);

/** 
 * Read Data from the File
 */

$filename = "sample.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, "r");

    // Read file content
    $content = fread($file, filesize($filename));

    // Close the file
    fclose($file);

    // Print file content
    echo "File content:\n$content";
} else {
    echo "File does not exist.";
}


$file = fopen("sample.txt", "r");
$content = fread($file, filesize("sample.txt"));
fclose($file);

?>
