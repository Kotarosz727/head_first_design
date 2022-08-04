<?php
namespace FareCalculation;

require_once 'BusFareCalculation.php';
require_once 'TypeEnum.php';
require_once 'BusFareEnum.php';

require_once 'TrainFareCalculation.php';
require_once 'TrainFareEnum.php';

$adultBusFare = new BusFareCalculation(TypeEnum::ADULT);
$adultBusFare->setRide(BusFareEnum::MASALA);
$adultBusFare->setExit(BusFareEnum::CHANPION_LOAD);
echo $adultBusFare->calcFare(). PHP_EOL;

$childBusFare = new BusFareCalculation(TypeEnum::CHILD);
$childBusFare->setRide(BusFareEnum::MASALA);
$childBusFare->setExit(BusFareEnum::CHANPION_LOAD);
echo $childBusFare->calcFare(). PHP_EOL;

$agedBusFare = new BusFareCalculation(TypeEnum::AGED);
$agedBusFare->setRide(BusFareEnum::MASALA);
$agedBusFare->setExit(BusFareEnum::CHANPION_LOAD);
echo $agedBusFare->calcFare(). PHP_EOL;

$adultTrainFare = new TrainFareCalculation(TypeEnum::ADULT);
$adultTrainFare->setRide(TrainFareEnum::MASALA);
$adultTrainFare->setExit(TrainFareEnum::GUREN);
echo $adultTrainFare->calcFare(). PHP_EOL;