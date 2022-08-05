<?php
namespace Sample;

class Light
{
    private $name = 'Light';

    public function on(): void
    {
        echo $this->name. ' is turned on'.PHP_EOL;
    }

    public function off()
    {
        echo $this->name. ' is turned off'.PHP_EOL;
    }
}