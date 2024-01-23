<?php

class ShippingFactory
{
    private static $carCities = ['Sebha'];
    private static $truckCities = ['Tripoli'];
    private static $planeCities = ['Benghazi'];

    public static function getShipping(string $city): ShippingInterface
    {
        if (in_array($city, self::$carCities)) {
            return new CarShipping($city);
        } elseif (in_array($city, self::$truckCities)) {
            return new TruckShipping($city);
        } elseif (in_array($city, self::$planeCities)) {
            return new PlaneShipping($city);
        } else {
            die('We don\'t ship to ' . $city);
        }
    }
}