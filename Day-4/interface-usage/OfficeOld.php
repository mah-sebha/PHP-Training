<?php

class OfficeOld
{
    private string $package;

    public function __construct()
    {
        
    }

    public function setPackage(string $package)
    {
        $this->package = $package;
    }

    public function sendTo(string $city)
    {
        if ($city == 'Sebha') {
            $method = 'Car';
        } elseif ($city == 'Tripoli') {
            $method = 'Truck';
        } elseif ($city == 'Benghazi') {
            $method = 'Plane';
        }

        if ($method == 'Car') {
            $this->sendCar($city);
        } elseif ($method == 'Truck') {
            $this->sendTruck($city);
        } elseif ($method == 'Plane') {
            $this->sendPlane($city);
        }
    }

    private function sendCar(string $city)
    {
        echo "Sending [$this->package] to $city via Car\n";
    }

    private function sendTruck(string $city)
    {
        echo "Sending [$this->package] to $city via Truck\n";
    }

    private function sendPlane(string $city)
    {
        echo "Sending [$this->package] to $city via Plane\n";
    }
}