<?php
namespace BusFareCalculatation;

require_once 'BusFee.php';

class AdultBusFee extends BusFee
{
    public function calcFee(int $fee) {
        return $fee;
    }
}