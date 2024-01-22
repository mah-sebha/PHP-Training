<?php
class Mobile {
    // Properties
    public $brand;
    public $model;
    private $batteryLevel;

    // Class constant
    const MAX_BATTERY_LEVEL = 100;

    // Static property
    public static $totalMobiles = 0;

    // Constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        $this->batteryLevel = self::MAX_BATTERY_LEVEL; // Full battery on start
        self::$totalMobiles++; // Increment total mobile count
    }

    // Methods
    public function makeCall($duration) {
        $this->batteryLevel -= $duration;
        if ($this->batteryLevel < 0) {
            $this->batteryLevel = 0;
        }
    }

    public function chargeBattery($charge) {
        $this->batteryLevel += $charge;
        if ($this->batteryLevel > self::MAX_BATTERY_LEVEL) {
            $this->batteryLevel = self::MAX_BATTERY_LEVEL;
        }
    }

    public function getBatteryLevel() {
        return $this->batteryLevel;
    }

    // Static method
    public static function getTotalMobiles() {
        return self::$totalMobiles;
    }

    // Destructor
    public function __destruct() {
        self::$totalMobiles--; // Decrement total mobile count
    }
}
