<?php
namespace PHP;

abstract class PizzaStore
{
    public function orderPizza(String $type): Pizza
    {
        $pizza = $this->createPizza($type);  
        $pizza->prepare();
        
        return $pizza;
    }

    public abstract function createPizza(String $type);
}