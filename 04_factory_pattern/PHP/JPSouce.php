<?php
namespace PHP;

require_once 'Ingredient.php';

class JPSouce implements Ingredient
{
    private $name = 'JPSouce';

    public function getName()
    {
        return $this->name;
    }
}