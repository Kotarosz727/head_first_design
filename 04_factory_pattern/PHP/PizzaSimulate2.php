<?php
namespace PHP;

require_once 'JapanStore.php';

$JPStyeCheezePizza = new JapanStore();
$order = $JPStyeCheezePizza->orderPizza('cheese');

echo 'His Order is '. $order->getName(). PHP_EOL;

