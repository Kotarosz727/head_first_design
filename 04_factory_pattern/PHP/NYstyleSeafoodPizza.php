<?php
namespace PHP;

require_once 'Pizza.php';

class NYstyleSeafoodPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Nystyle Seafood Pizza';
        $this->souce = 'Nystyle souse for Seafood';
        array_push($this->toppings, 'shrimps');
    }
}