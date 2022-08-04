<?php
namespace FareCalculation;

require_once 'FareCalclation.php';
require_once 'AdultTrainFare.php';
require_once 'ChildTrainFare.php';
require_once 'AgedTrainFare.php';
require_once 'FareInterface.php';
require_once 'TypeEnum.php';
require_once 'TrainFareEnum.php';
require_once 'FareCalculationInterface.php';

class TrainFareCalculation extends FareCalclation implements FareCalculationInterface
{
    const BASE_FARE = 150;
    private $type;

    public function __construct(TypeEnum $type)
    {
        $this->baseFare = self::BASE_FARE;
        $this->type = $type;
    }

    public function setRide(FareEnumInterface $start): void
    {
        $this->start = $start->value;
    }

    public function setExit(FareEnumInterface $end): void
    {
        $this->end = $end->value;
    }

    public function createFare(): FareInterface
    {
        $base = $this->calcBaseFare();

        return match($this->type->value) {
            'adult' => new AdultTrainFare($base),
            'child' => new ChildTrainFare($base),
            'aged' => new AgedTrainFare($base),
        };
    }
}