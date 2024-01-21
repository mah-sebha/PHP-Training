<!DOCTYPE html>
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

        <form action="thanks.php" method="POST" class="uk-form-stacked">
            <div class="uk-margin">
                <label class="uk-form-label" for="name">Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="name" type="text" placeholder="Your name" name="name" required>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="message">Message</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" id="message" type="text" placeholder="Your message" name="message"></textarea>
                </div>
            </div>
            <button class="uk-button uk-button-default">Submit</button>
        </form>
    </div>


    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>

</body>

</html>