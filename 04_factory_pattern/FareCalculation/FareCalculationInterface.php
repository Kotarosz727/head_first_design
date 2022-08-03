<?php
namespace FareCalculation;

require_once 'FareInterface.php';

interface FareCalculationInterface
{
    public function setRide(BusFareEnum $start):void;

    public function setExit(BusFareEnum $end):void;

    public function createFare():FareInterface;
}