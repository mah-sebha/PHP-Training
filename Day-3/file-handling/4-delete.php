<?php

/** 
 * Delete the File
 */

$filename = "sample.txt";

// Delete the file
if (unlink($filename)) {
    echo "File deleted successfully.";
} else {
    echo "Error in deleting the file.";
}
?>
