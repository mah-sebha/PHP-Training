<?php

include __DIR__ . '/Mobile.php';

$myMobile = new Mobile("Apple", "iPhone 13");
$friendMobile = new Mobile("Samsung", "Galaxy S21");

$myMobile->makeCall(10); // Make a call for 10 units of battery
echo "Battery Level: " . $myMobile->getBatteryLevel() . "\n"; // Check battery level

$friendMobile->chargeBattery(20); // Charge the battery by 20 units

echo "Total Mobiles: " . Mobile::getTotalMobiles() . "\n"; // Outputs total mobile count

echo "Max Battery Level: " . Mobile::MAX_BATTERY_LEVEL . "\n";
