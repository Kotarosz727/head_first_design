<?php
namespace PHP;

require_once 'Ingredient.php';

class JPSouce implements Ingredient
{
    public function getName()
    {
        return 'This is JPSouce';
    }
}