<?php
namespace FareCalculation;

require_once 'BusFareCalculation.php';
require_once 'TypeEnum.php';
require_once 'BusFareEnum.php';

$fare = new BusFareCalculation(TypeEnum::ADULT);
$fare->setRide(BusFareEnum::MASALA);
$fare->setExit(BusFareEnum::CHANPION_LOAD);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(TypeEnum::CHILD);
$fare->setRide(BusFareEnum::MASALA);
$fare->setExit(BusFareEnum::CHANPION_LOAD);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(TypeEnum::AGED);
$fare->setRide(BusFareEnum::MASALA);
$fare->setExit(BusFareEnum::CHANPION_LOAD);
echo $fare->calcFare(). PHP_EOL;