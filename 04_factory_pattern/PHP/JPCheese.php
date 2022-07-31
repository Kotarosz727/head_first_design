<?php
namespace PHP;

require_once 'Ingredient.php';

class JPCheese implements Ingredient
{
    private $name = 'JPcheese';

    public function getName()
    {
        return $this->name;
    }
}