<?php
namespace FareCalculation;

require_once 'FareCalclation.php';
require_once 'AdultBusFare.php';
require_once 'ChildBusFare.php';
require_once 'AgedBusFare.php';
require_once 'FareInterface.php';
require_once 'TypeEnum.php';
require_once 'BusFareEnum.php';
require_once 'FareCalculationInterface.php';

class BusFareCalculation extends FareCalclation implements FareCalculationInterface
{
    const BASE_FARE = 100;
    private $type;

    public function __construct(TypeEnum $type)
    {
        $this->baseFare = self::BASE_FARE;
        $this->type = $type;
    }

    public function setRide(BusFareEnum $start): void
    {
        $this->start = $start->value;
    }

    public function setExit(BusFareEnum $end): void
    {
        $this->end = $end->value;
    }

    public function createFare(): FareInterface
    {
        $base = $this->calcBaseFare();

        return match($this->type->value) {
            'adult' => new AdultBusFare($base),
            'child' => new ChildBusFare($base),
            'aged' => new AgedBusFare($base),
        };
    }
}