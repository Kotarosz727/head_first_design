<?php
namespace PHP;

interface IngredientFactory
{
    public function createDough();
    public function createSouce();
    public function createCheese();
}