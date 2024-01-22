<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employees List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>

<body>
    <div class="uk-container">
        <h1>Employees List</h1>

        <?php
//-------- Import CSV File --------
$filename = __DIR__ . '/employees.csv';

// Check if the file exists
if (!file_exists($filename) || !is_readable($filename)) {
    exit("The file does not exist or is not readable.");
}

// Open the file
if (($handle = fopen($filename, "r")) !== FALSE) {
    echo "<table class='uk-table uk-table-divider'>"; // Start a table for display

    // Loop through the CSV rows
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        echo "<tr>";
        foreach ($data as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>"; // End the table
    fclose($handle); // Close the file handle
} else {
    echo "Unable to open the file.";
}
?>
</div>


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>

</body>

</html>