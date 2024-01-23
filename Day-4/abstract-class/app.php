<?php

include __DIR__ . '/Notification.php';
include __DIR__ . '/EmailNotification.php';
include __DIR__ . '/SMSNotification.php';
include __DIR__ . '/InAppNotification.php';

$email = new EmailNotification("user@example.com", "Welcome to our platform!");
$email->send(); // Sends an email

$sms = new SMSNotification("1234567890", "Your verification code is 1234");
$sms->send(); // Sends an SMS

$inApp = new InAppNotification("user123", "You have new messages");
$inApp->send(); // Sends an in-app notification