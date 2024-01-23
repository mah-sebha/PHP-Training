<?php

abstract class Notification {
    protected $recipient;
    protected $message;

    public function __construct($recipient, $message) {
        $this->recipient = $recipient;
        $this->message = $message;
    }

    // Abstract method - specific notification types must implement this
    abstract public function send();
}
