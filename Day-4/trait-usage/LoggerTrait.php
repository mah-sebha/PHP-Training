<?php

trait LoggerTrait {
    public function log($message) {
        echo "Log: $message\n";
        // Here, you would write the log to a file or a logging system
    }
}
