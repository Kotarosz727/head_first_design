<?php
namespace sample;

require_once 'Duck.php';

class MallaredDuck implements Duck
{
    public function quack()
    {
        echo 'quack'. PHP_EOL;
    }

    public function fly()
    {
        echo 'can fly longer'. PHP_EOL;
    }
}