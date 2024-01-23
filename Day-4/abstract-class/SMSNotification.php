<?php

class SMSNotification extends Notification {
    public function send() {
        echo "Sending SMS to $this->recipient: $this->message\n";
        // SMS-sending logic goes here
    }
}
