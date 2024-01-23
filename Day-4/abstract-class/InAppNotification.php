<?php

class InAppNotification extends Notification {
    public function send() {
        echo "Sending In-App Notification to $this->recipient: $this->message\n";
        // In-app notification logic goes here
    }
}
