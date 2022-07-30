<?php
namespace BusFareCalculatation;

require_once 'BusFee.php';

$fee = new BusFee();
$concreteBusFee = $fee->createBusFee('child');
$result =  $concreteBusFee->getFee(1, 3);

echo 'バスの運賃は '. $result. '円です。'. PHP_EOL;

$fee2 = new BusFee();
$concreteBusFee2 = $fee2->createBusFee('adult');
$result2 =  $concreteBusFee2->getFee(1, 5);

echo 'バスの運賃は '. $result2. '円です。'. PHP_EOL;