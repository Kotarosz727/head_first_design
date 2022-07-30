<?php
namespace PHP;

require 'Pizza.php';

class NYstyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Nystyle cheese Pizza';
        $this->souce = 'Nystyle souse';
        array_push($this->toppings, 'More Cheese');
    }
}