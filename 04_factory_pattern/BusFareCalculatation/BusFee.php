<?php
namespace BusFareCalculatation;

require_once 'AdultBusFee.php';
require_once 'ChildBusFee.php';
require_once 'AgedBusFee.php';

class BusFee
{
    const BASE_FEE = 100;

    public function createBusFee($type) {
        return match($type) {
            'adult' => new AdultBusFee(),
            'child' => new ChildBusFee(),
            'aged' => new AgedBusFee,
        };
    }

    public function getFee(int $start, int $end): int 
    {
        $fee = ($end - $start) * self::BASE_FEE;
        
        //子クラスのcalcFeeを呼ぶ
        return $this->calcFee($fee);
    }
}