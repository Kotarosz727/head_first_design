<?php
namespace PHP;

require_once 'Ingredient.php';

class JPDough implements Ingredient
{
    public function getName()
    {
        return 'This is JPDough';
    }
}