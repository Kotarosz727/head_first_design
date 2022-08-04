<?php
namespace FareCalculation;

require_once 'FareEnumInterface.php';

enum BusFareEnum: int implements FareEnumInterface
{
    case MASALA = 1;
    case KOTOBUKI = 2;
    case YAMABUKI = 3;
    case HANADA = 4;
    case CHANPION_LOAD = 5;
}