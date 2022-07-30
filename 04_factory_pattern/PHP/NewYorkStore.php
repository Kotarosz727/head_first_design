<?php
namespace PHP;

require_once 'PizzaStore.php';
require_once 'NYstyleCheesePizza.php';
require_once 'NYstyleSeafoodPizza.php';

class NewYorkStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            return new NYstyleCheesePizza();
        } elseif ($type === 'seafood') {
            return new NYstyleSeafoodPizza();
        }
    }
}