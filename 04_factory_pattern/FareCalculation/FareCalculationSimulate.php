<?php
namespace FareCalculation;

require_once 'BusFareCalculation.php';
require_once 'TypeEnum.php';
require_once 'BusFareEnum.php';

$fare = new BusFareCalculation(BusFareEnum::MASALA, BusFareEnum::YAMABUKI, TypeEnum::ADULT);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(BusFareEnum::HANADA, BusFareEnum::CHANPION_LOAD, TypeEnum::CHILD);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(BusFareEnum::MASALA, BusFareEnum::YAMABUKI, TypeEnum::AGED);
echo $fare->calcFare(). PHP_EOL;