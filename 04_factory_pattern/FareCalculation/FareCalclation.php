<?php
namespace FareCalculation;

require_once 'FareInterface.php';

class FareCalclation
{
    protected int $start;
    protected int $end;
    protected int $baseFare;
    private FareInterface $fare;

    public function calcFare()
    {
        $fare = $this->createFare();
        $fare = $fare->getFare();

        return $fare;
    }

    public function calcBaseFare(): int
    {
        return ($this->end - $this->start) * $this->baseFare; 
    }
}