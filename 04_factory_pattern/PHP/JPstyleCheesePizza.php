<?php
namespace PHP;

require_once 'Pizza.php';

class JPstyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'JPstyle cheese Pizza';
        $this->souce = 'JPstyle souse';
        array_push($this->toppings, 'More Cheese');
    }
}