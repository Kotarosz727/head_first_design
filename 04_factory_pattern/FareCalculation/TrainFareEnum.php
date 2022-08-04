<?php
namespace FareCalculation;

require_once 'FareEnumInterface.php';

enum TrainFareEnum:int implements FareEnumInterface 
{
    case MASALA = 1;
    case HANABUKI = 2;
    case YAMABUKI = 3;
    case GUREN = 4;
}