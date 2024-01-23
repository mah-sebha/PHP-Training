<?php

abstract class Dish
{
    public function __construct(
        protected string $name,
        protected int $quantity,
        protected string $text,
        protected string $image
    ) {
    }

    abstract public function cook(int $quantity): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}
