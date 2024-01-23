<?php

include __DIR__ . '/Product.php';
include __DIR__ . '/SaleProduct.php';

echo '<pre>';

$regularProduct = new Product(100);
echo "Regular Price: " . $regularProduct->calculatePrice() . "\n"; // Outputs: 100

$saleProduct = new SaleProduct(100, 20); // 20% discount
echo "Sale Price: " . $saleProduct->calculatePrice() . "\n"; // Outputs: 80

echo '</pre>';
