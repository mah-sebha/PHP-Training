<?php

/** 
 * Append Data to the File
 */

$filename = "sample.txt";

$additionalContent = "Adding more content to the file.\n";

// Open the file for appending
$file = fopen($filename, "a");

// Append content to the file
fwrite($file, $additionalContent);

// Close the file
fclose($file);
echo "Additional content appended to file.\n";
?>
