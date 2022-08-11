<?php
namespace Sample;

require_once 'Caffein.php';

class Tea extends Caffein
{
    public function brew(): void
    {
        echo 'Steeping the Tea.'. PHP_EOL;
    }

    public function addCondiments(): void
    {
        echo 'Add Lemon'. PHP_EOL;
    }

    public function wantsCondimentsHook($bool = null): ?bool
    {
        return $bool;
    }
}