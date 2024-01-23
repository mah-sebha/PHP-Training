<?php

include_once('menu.php');
?>
<h3>Menu</h3>
<?php foreach ($menu as $item) { ?>
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/<?php echo $item['image']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $item['name']; ?></h5>
        <p class="card-text"><?php echo $item['text']; ?></p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<?php } ?>