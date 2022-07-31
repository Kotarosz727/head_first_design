<?php
namespace PHP;

require_once 'Pizza.php';

abstract class PizzaStore
{
    public Pizza $pizza;

    public function orderPizza(String $type): Pizza
    {
        $this->pizza = $this->createPizza($type);  
        $this->pizza->prepare();
        
        return $this->pizza;
    }

    public abstract function createPizza(String $type);
}