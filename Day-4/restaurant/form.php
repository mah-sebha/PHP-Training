<?php

include_once('menu.php');
?>
<h3>Order</h3>

<form action="kitchen.php" method="post">
    <?php foreach ($menu as $k => $item) { ?>
        <div class="row mb-3 dish-row">
            <div class="col-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo $item['name']; ?>" id="item-<?php echo $k; ?>">
                    <label class="form-check-label" for="item-<?php echo $k; ?>">
                        <?php echo $item['name']; ?>
                    </label>
                </div>
            </div>
            <div class="col-7">
                <div class="input-group">
                    <span class="input-group-text">Quantity</span>
                    <input type="number" class="form-control" name="<?php echo $item['name']; ?>Qty" value="0">
                </div>
            </div>
        </div>
    <?php } ?>
        <div class="row">
            <div class="col text-end">
                <button type="submit" class="btn btn-primary">Place order</button>
            </div>
        </div>

</form>
