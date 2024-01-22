<?php
// Allowed extensions for uploaded files
$allowedExtensions = ['png', 'jpg', 'jpeg'];

$name = '';
$message = '';

$success = '';
$error = '';
$fileUploaded = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Handle file upload if there is one
    if (isset($_FILES['file'])) {
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if (!in_array($ext, $allowedExtensions)) {
            $error = 'Invalid file type! Only the following file types are allowed: ' . implode(', ', $allowedExtensions);
        } else {
            $bytes = random_bytes(16);
            $uniqueFileName = bin2hex($bytes) . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
            $targetDir = __DIR__ . '/uploads/';
            $targetFile = $targetDir . $uniqueFileName;
        
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                $fileUploaded = 'uploads/' . $uniqueFileName;
                $success = 'File uploaded successfully!';
            } else {
                $error = 'Error uploading file!';
            }
        }
        
    }
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
            <?php echo $success; ?>
        </div>

        <?php if (!empty($error)) { ?>
            <div class="uk-alert-danger" uk-alert>
                <a href class="uk-alert-close" uk-close></a>
                <p><?php echo $error; ?></p>
            </div>
        <?php } ?>
        
        <?php if (!empty($fileUploaded)) { ?>
            <!-- Display the uploaded file -->
            <img src="<?php echo $fileUploaded; ?>" alt="Uploaded file">
        <?php } ?>

    </div>


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>

</body>

</html>