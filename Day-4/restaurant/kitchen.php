<?php

include __DIR__ . '/menu.php';

// Classes
include __DIR__ . '/classes/Order.php';
include __DIR__ . '/classes/Dish.php';
include __DIR__ . '/classes/Pizza.php';
include __DIR__ . '/classes/TunaSandwich.php';

include __DIR__ . '/includes/header.php';
?>
    <main>
        <div class="container">
            <h3 class="my-3">Order Status</h3>
            <p></p>

            Your ordered: <br>
        <?php
        $summary = [];

        $order = new Order();

        foreach ($menu as $item) {
            $name = $item['name'];
            if (isset($_POST[$name . 'Qty'])) {
                $summary[$name] = $_POST[$name . 'Qty'];

                // Create new dish, same as new Pizza
                $dish = new $name($item['name'], $item['quantity'], $item['text'], $item['image']);
                $order->addDish($dish, $_POST[$name . 'Qty']);
            }
        }
        ?>
        <ul>
            <?php foreach ($summary as $name => $qty) {
                echo "<li>$qty $name</li>";
            }
            ?>
        </ul>
        <?php
        if (!$order->checkStock()) {
            echo '<p class="text-danger">Not enough ingredients in stock!</p>';
        } else {
            echo '<p class="text-success">Your Order will be ready shortly.</p>';
            echo "<pre>";
            $order->prepare();
            $order->deliver();
            
            echo "</pre>";
            echo '<div class="alert alert-info text-center"><h4><em>Bon appétit</em></h4></div>';
        }
        
        ?>
        
        </div>
    </main>
<?php
include __DIR__ . '/includes/footer.php';    
