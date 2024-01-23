<?php

class Pizza extends Dish
{
    public function cook(int $quantity): void
    {
        for ($i = 0; $i < $quantity; $i++) {
            echo "Cooking 🍕 #" . ($i + 1) . "\n";
        }
    }
}