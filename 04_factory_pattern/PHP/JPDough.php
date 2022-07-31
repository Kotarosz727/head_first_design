<?php
namespace PHP;

require_once 'Ingredient.php';

class JPDough implements Ingredient
{
    private $name = 'JPDough';

    public function getName()
    {
        return $this->name;
    }
}