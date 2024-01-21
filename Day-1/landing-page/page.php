<?php

include __DIR__ . '/config.php';

?><!DOCTYPE html>
<html>
<head>
  <title><?php echo $companyName ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/css/uikit.min.css" />

  </head>
<body>
<?php
include __DIR__ . '/header.php';
?>

<main class="uk-section">
  <div class="uk-container">
    <h2 class="uk-heading-medium">About Us</h2>
    <p><?php echo $description; ?></p>
    <img src="training-center.png" alt="Company Image" class="uk-align-center uk-margin-large-top"> </div>

    <section class="uk-section">
  <div class="uk-container">
    <h2 class="uk-heading-medium">Contact Us</h2>
    <ul class="uk-list uk-list-divider">
      <li><span class="uk-text-bold">Address:</span> <?php echo $address ?></li>
      <li><span class="uk-text-bold">Phone:</span> <?php echo $phone ?></li>
      <li><span class="uk-text-bold">Email:</span> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
    </ul>
  </div>
</section>
</main>

<?php
include __DIR__ . '/footer.php';
?>
  </body>
</html>
