<?php
namespace FareCalculation;

require_once 'FareCalclation.php';
require_once 'AdultBusFare.php';
require_once 'ChildBusFare.php';
require_once 'AgedBusFare.php';
require_once 'FareInterface.php';

class BusFareCalculation extends FareCalclation
{
    const BASE_FARE = 100;
    private $type;

    public function __construct($start, $end, $type)
    {
        $this->baseFare = self::BASE_FARE;
        $this->start = $start;
        $this->end = $end;
        $this->type = $type;
    }

    public function createFare(): FareInterface
    {
        $base = $this->calcBaseFare();

        return match($this->type) {
            'adult' => new AdultBusFare($base),
            'child' => new ChildBusFare($base),
            'aged' => new AgedBusFare($base),
        };
    }
}