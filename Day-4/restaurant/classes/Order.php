<?php

class Order
{
    public array $dishes = [];

    public function addDish(Dish $dish, int $quantity)
    {
        $this->dishes[] = [
            'dish' => $dish,
            'quantity' => $quantity
        ];
    }

    public function checkStock(): bool
    {

        foreach ($this->dishes as $dish) {
            if ($dish['quantity'] > $dish['dish']->getQuantity()) {
                return false;
            }
        }
        return true;
    }

    public function prepare()
    {
        foreach ($this->dishes as $dish) {
            $dish['dish']->cook($dish['quantity']);
        }
    }

    public function deliver()
    {
        foreach ($this->dishes as $dish) {
            echo "Delivering {$dish['dish']->getName()}\n";
        }
    }
}