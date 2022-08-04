<?php
namespace FareCalculation;

require_once 'FareInterface.php';
require_once 'FareEnumInterface.php';

interface FareCalculationInterface
{
    public function setRide(FareEnumInterface $start): void;

    public function setExit(FareEnumInterface $end): void;

    public function createFare():FareInterface;
}