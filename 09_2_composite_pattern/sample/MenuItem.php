<?php
// leaf 

namespace sample;

require_once 'MenuComponents.php';

class MenuItem extends MenuComponents
{
    public function __construct(
        private string $name,
        private int $price,
        private string $description
    )
    {}

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

    public function print()
    {
        echo $this->name. PHP_EOL;
        echo $this->price. PHP_EOL;
        echo $this->description. PHP_EOL;
    }
}
