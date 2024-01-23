<?php

class PlaneShipping implements ShippingInterface
{
    public function __construct(private string $city)
    {
        
    }
    public function deliver(string $package)
    {
        echo "Sending [$package] to $this->city via a Plane\n";
    }
}