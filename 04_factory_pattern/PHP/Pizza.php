<?php
namespace PHP;

abstract class Pizza
{
    protected String $name;
    protected String $souce;
    protected $toppings = [];

    public function prepare(): void
    {
        echo 'start making '. $this->name. '!';
        echo 'adding '. $this->souce. '!';
        foreach ($this->toppings as $val) {
            echo 'adding '. $val. '!';
        }
    }

    public function getName(): String
    {
        return $this->name;
    }
}