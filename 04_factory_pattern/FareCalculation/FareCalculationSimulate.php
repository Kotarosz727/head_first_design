<?php
namespace FareCalculation;

require_once 'BusFareCalculation.php';
require_once 'TypeEnum.php';

$fare = new BusFareCalculation(1, 3, TypeEnum::ADULT);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(1, 3, TypeEnum::CHILD);
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(1, 3, TypeEnum::AGED);
echo $fare->calcFare(). PHP_EOL;