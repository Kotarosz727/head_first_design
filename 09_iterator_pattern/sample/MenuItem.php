<?php
namespace sample;

class MenuItem
{
    public function __construct(
        private string $name,
        private int $price,
        private string $description
    ){}

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}