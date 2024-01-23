<?php

class ProductController {
    use LoggerTrait;

    public function deleteProduct($productId) {
        // Some logic to delete a product
        $this->log("Product deleted: $productId");
    }
}
