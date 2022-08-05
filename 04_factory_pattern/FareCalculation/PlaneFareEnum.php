<?php
namespace FareCalculation;

require_once 'FareEnumInterface.php';

enum PlaneFareEnum: int implements FareEnumInterface
{
    case JOTO = 1;
    case KANTO = 2;
    case HOEN = 3;
    case ALOLA = 4;
}