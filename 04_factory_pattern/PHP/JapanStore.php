<?php
namespace PHP;

require_once 'JPstyleCheesePizza.php';
require_once 'JPstyleSeafoodPizza.php';

class JapanStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            return new JPstyleCheesePizza();
        } elseif ($type === 'seafood') {
            return new JPstyleSeafoodPizza();
        }
    }
}