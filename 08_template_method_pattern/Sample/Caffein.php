<?php
namespace Sample;

class Caffein
{
    public function prepare()
    {
        $this->boilWater();
        $this->brew();
        $this->poorInCup();

        if ($this->wantsCondimentsHook()) {
            $this->addCondiments();
        }
    }

    public function boilWater(): void
    {
        echo 'Boil water.'. PHP_EOL;
    }

    public function brew(): void{}

    public function poorInCup(): void
    {
        echo 'Poor in Cup.'. PHP_EOL;
    }

    public function addCondiments(): void {}

    public function wantsCondimentsHook()
    {}
}