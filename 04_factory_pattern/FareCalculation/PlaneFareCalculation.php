<?php
namespace FareCalculation;

require_once 'FareCalclation.php';
require_once 'AdultPlaneFare.php';
require_once 'ChildPlaneFare.php';
require_once 'AgedPlaneFare.php';
require_once 'FareInterface.php';
require_once 'TypeEnum.php';
require_once 'PlaneFareEnum.php';
require_once 'FareCalculationInterface.php';

class PlaneFareCalculation extends FareCalclation implements FareCalculationInterface
{
    const BASE_FARE = 10000;
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
            'adult' => new AdultPlaneFare($base),
            'child' => new ChildPlaneFare($base),
            'aged' => new AgedPlaneFare($base),
        };
    }
}