<?php
namespace FareCalculation;

require_once 'FareInterface.php';

class FareCalclation
{
    protected int $start;
    protected int $end;
    protected int $baseFare;
    private FareInterface $fare;

    public function calcFare(): int
    {
        $this->fare = $this->createFare();
        return $this->fare->getFare();
    }

    public function calcBaseFare(): int
    {
        return ($this->end - $this->start) * $this->baseFare; 
    }
}