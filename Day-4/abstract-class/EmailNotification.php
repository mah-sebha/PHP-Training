<?php

class EmailNotification extends Notification {
    public function send() {
        echo "Sending Email to $this->recipient: $this->message\n";
        // Email-sending logic goes here
    }
}