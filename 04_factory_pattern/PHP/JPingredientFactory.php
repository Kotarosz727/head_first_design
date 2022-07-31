<?php
namespace PHP;

require_once 'IngredientFactory.php';
require_once 'JPDough.php';
require_once 'JPSouce.php';
require_once 'JPCheese.php';

class JPingredientFactory implements IngredientFactory
{
    public function createDough() {
        return new JPDough();
    }

    public function createSouce() {
        return new JPSouce();
    }

    public function createCheese() {
        return new JPCheese();
    }
}