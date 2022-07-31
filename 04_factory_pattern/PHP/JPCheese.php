<?php
namespace PHP;

require_once 'Ingredient.php';

class JPCheese implements Ingredient
{
    public function getName()
    {
        return 'This is JPCheese';
    }
}