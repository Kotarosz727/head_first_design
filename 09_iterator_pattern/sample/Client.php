<?php
namespace sample;

require_once 'DinerMenu.php';
require_once 'CakeMenu.php';

$dinerMenu = new DinerMenu;
$dinerMenuIterator = $dinerMenu->getIterator();

$cakeMenu = new CakeMenu;
$cakeMenuIterator = $cakeMenu->getIterator();

foreach($dinerMenuIterator as $iterator)
{
    echo $iterator->getName(). PHP_EOL;
    echo $iterator->getPrice(). PHP_EOL;
    echo $iterator->getDescription(). PHP_EOL;
}


foreach($cakeMenuIterator as $iterator)
{
    echo $iterator->getName(). PHP_EOL;
    echo $iterator->getPrice(). PHP_EOL;
    echo $iterator->getDescription(). PHP_EOL;
}

