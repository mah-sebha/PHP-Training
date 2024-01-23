<?php
include 'OfficeOld.php';

$package = 'Samsung Mobile Phone s24 ultra';
$city = 'Sebha';

$office = new OfficeOld();
$office->setPackage($package);
$office->sendTo($city);