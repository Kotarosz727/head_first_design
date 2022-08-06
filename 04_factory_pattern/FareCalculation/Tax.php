<?php
namespace FareCalculation;

class Tax
{
    private const RATE = 0.1;

    public function includeTax(int $price)
    {
        return ceil($price * (1 + self::RATE));
    }
}