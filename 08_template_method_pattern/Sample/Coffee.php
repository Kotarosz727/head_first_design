<?php
namespace Sample;

require_once 'Caffein.php';

class Coffee extends Caffein
{
    public function brew(): void
    {
        echo 'Dripping the Tea.'. PHP_EOL;
    }

    public function addCondiments(): void
    {
        echo 'Add Sugar and Milk'. PHP_EOL;
    }

    public function wantsCondimentsHook($bool = false): bool
    {
        return $bool;
    }
}