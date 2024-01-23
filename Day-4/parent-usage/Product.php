<?php

class Product {
    protected $basePrice;

    public function __construct($basePrice) {
        $this->basePrice = $basePrice;
    }

    public function calculatePrice() {
        // Basic price calculation
        return $this->basePrice;
    }
}
