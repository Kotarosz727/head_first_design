<?php
namespace PHP;

require_once 'NewYorkStore.php';
require_once 'JapanStore.php';

$nyStyeCheezePizza = new NewYorkStore();
$order = $nyStyeCheezePizza->orderPizza('cheese');

echo 'Your Order is '. $order->getName(). PHP_EOL;

$nySeafoodPizza = new NewYorkStore();
$order2 = $nySeafoodPizza->orderPizza('seafood');

echo 'Your second Order is '. $order2->getName(). PHP_EOL;

$JPStyeCheezePizza = new JapanStore();
$order = $JPStyeCheezePizza->orderPizza('cheese');

echo 'His Order is '. $order->getName(). PHP_EOL;

$JPSeafoodPizza = new JapanStore();
$order2 = $JPSeafoodPizza->orderPizza('seafood');

echo 'His second Order is '. $order2->getName(). PHP_EOL;

