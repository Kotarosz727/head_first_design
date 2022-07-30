<?php
namespace BusFareCalculatation;

require_once 'BusFee.php';

class AgedBusFee extends BusFee
{
    public function calcFee(int $fee) {
        return 100;
    }
}