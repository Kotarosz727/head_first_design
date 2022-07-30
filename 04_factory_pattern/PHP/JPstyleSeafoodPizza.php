<?php
namespace PHP;

require_once 'Pizza.php';

class JPstyleSeafoodPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'JPstyle Seafood Pizza';
        $this->souce = 'JPstyle souse for Seafood';
        array_push($this->toppings, 'shrimps');
    }
}