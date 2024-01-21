<?php
/**
 * Resturant Ordering Example
 */
// Quantities
$pizzaQty = 10;
$tunaSandwichQty = 35;

// Orders (user inputs)
$orderType = ''; // pizza or tunaSandwich
$orderQty = 5;

echo "<pre>";
$orderType = $orderType ?? 'specials';
$orderMade = $orderType != '' && $orderQty > 0 ? 'Yes' : 'No';
//echo $orderMade;

if ($orderType === 'pizza' && $pizzaQty < $orderQty) {
    die ("Sorry, Not enough Pizza ingredients");
} elseif ($orderType === 'tunaSandwich' && $tunaSandwichQty < $orderQty) {
    die ("Sorry, Not enough Tuna Sandwich ingredients");
} else {
    echo "Checking your order for $orderType...\n";
}

switch ($orderType) {
    case 'pizza':
        $pizzaQty -= $orderQty;
        break;
    case 'tunaSandwich':
        $tunaSandwichQty -= $orderQty;
        break;
    default:
        die ("Sorry, we don't make $orderType");
}


for ($i = 0; $i < $orderQty; $i++) {
    echo "- Preparing $orderType # ".($i + 1)." of $orderQty!\n";
}

$orderReady = false;
$c = 0;
while (!$orderReady) {
    echo "- Preparing $orderType # ".($c + 1)." of $orderQty!\n";
    $c++;
    $orderReady = $c >= $orderQty;
}

echo "Your $orderType is ready!\n";

echo "Pizza left: $pizzaQty\n";
echo "Tuna Sandwich left: $tunaSandwichQty\n";
echo "</pre>";