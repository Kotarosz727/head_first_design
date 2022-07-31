<?php
namespace PHP;

require_once 'Ingredient.php';

abstract class Pizza
{
    protected String $name;
    protected $toppings = [];
    public Ingredient $souce;
    public Ingredient $cheese;
    public Ingredient $dough;

    public abstract function prepare(): void;

    public function getName(): String
    {
        return $this->name;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }
}