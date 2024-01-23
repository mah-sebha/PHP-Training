<?php

class Office
{
    private ShippingInterface $shipping;
    private string $package;

    public function receivePackage(string $package)
    {
        $this->package = $package;
    }

    public function setShipping(ShippingInterface $shipping)
    {
        $this->shipping = $shipping;
    }

    public function send()
    {
        $this->shipping->deliver($this->package);
    }
}