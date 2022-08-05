<?php
namespace FareCalculation;

require_once 'FareInterface.php';

class ChildPlaneFare implements FareInterface
{
    private $base;

    public function __construct($base)
    {
        $this->base = $base;
    }

    public function getFare(): int
    {
        return ceil($this->base * 0.5);
    }
}