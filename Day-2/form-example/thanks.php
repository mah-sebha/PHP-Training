<?php

$name = '';
$message = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    // TODO: Send email
} else {
    header("Location: contact.php");
    exit();
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>

<body>
    <div class="uk-container">
        <h1>Contact Us</h1>
        <div class="uk-alert-success" uk-alert>
            <a href class="uk-alert-close" uk-close></a>
            <p>Thank you, <strong><?php echo $name; ?></strong>, for your feedback.</p>
        </div>
        
    </div>


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>

</body>

</html>