<?php
namespace PHP;

require_once 'Pizza.php';
require_once 'IngredientFactory.php';

class CheesePizza extends Pizza
{
    public IngredientFactory $factory;

    public function __construct(IngredientFactory $factory)
    {
        $this->factory = $factory;
    }

    public function prepare(): void
    {
        echo 'preparing '. $this->name. PHP_EOL;

        $this->dough = $this->factory->createDough();
        $this->souce = $this->factory->createSouce();
        $this->cheese = $this->factory->createCheese();
    }
}