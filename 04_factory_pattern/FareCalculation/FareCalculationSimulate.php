<?php
namespace FareCalculation;

require_once 'BusFareCalculation.php';

$fare = new BusFareCalculation(1, 3, 'adult');
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(1, 3, 'child');
echo $fare->calcFare(). PHP_EOL;

$fare = new BusFareCalculation(1, 3, 'aged');
echo $fare->calcFare(). PHP_EOL;