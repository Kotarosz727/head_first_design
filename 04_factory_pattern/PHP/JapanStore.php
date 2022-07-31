<?php
namespace PHP;

require_once 'JPingredientFactory.php';
require_once 'CheesePizza.php';
require_once 'PizzaStore.php';

class JapanStore extends PizzaStore
{
    public function createPizza($type)
    {
        $factory = new JPingredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($factory);
            $pizza->setName('Japanese Style Pizza.');
        }

        return $pizza;
    }
}