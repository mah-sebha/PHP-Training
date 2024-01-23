<?php

class OrderProcessor {
    use LoggerTrait, DebuggerTrait;

    public function processOrder($orderId) {
        // Some logic to process the order
        $this->log("Order processed: $orderId");
        $this->debug("Order processing details: ...");
    }
}
