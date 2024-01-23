<?php

include __DIR__ . '/Office.php';
include __DIR__ . '/ShippingFactory.php';
include __DIR__ . '/ShippingInterface.php';
include __DIR__ . '/CarShipping.php';
include __DIR__ . '/TruckShipping.php';
include __DIR__ . '/PlaneShipping.php';

$package = 'Samsung Mobile Phone s24 ultra';
$city = 'Sebha';

$shipping = ShippingFactory::getShipping($city);

$office = new Office();
$office->receivePackage($package);
$office->setShipping($shipping);
$office->send();