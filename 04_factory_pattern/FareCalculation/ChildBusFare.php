<?php
namespace FareCalculation;

require_once 'FareInterface.php';

class ChildBusFare implements FareInterface
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    public function getFare(): int
    {
        return $this->base / 2;
    }
}