<?php

class SaleProduct extends Product {
    private $discountRate;

    public function __construct($basePrice, $discountRate) {
        parent::__construct($basePrice);
        $this->discountRate = $discountRate;
    }

    public function calculatePrice() {
        // Use parent class to get the base price
        $basePrice = parent::calculatePrice();

        // Apply discount
        return $basePrice * (1 - $this->discountRate / 100);
    }
}
