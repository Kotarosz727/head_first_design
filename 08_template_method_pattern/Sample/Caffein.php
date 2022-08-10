<?php
namespace Sample;

abstract class Caffein
{
    public function prepare($bool)
    {
        $this->boilWater();
        $this->brew();
        $this->poorInCup();

        if ($this->wantsCondimentsHook($bool)) {
            $this->addCondiments();
        }
    }

    public final function boilWater(): void
    {
        echo 'Boil water.'. PHP_EOL;
    }

    // premitive opration, which is implemented by concrete subclasses. 
    public abstract function brew(): void;

    public final function poorInCup(): void
    {
        echo 'Poor in Cup.'. PHP_EOL;
    }

    // premitive opration, which is implemented by concrete subclasses. 
    public abstract function addCondiments(): void;

    public abstract function wantsCondimentsHook();
}