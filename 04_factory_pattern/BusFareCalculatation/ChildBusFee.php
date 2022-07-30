<?php
namespace BusFareCalculatation;

require_once 'BusFee.php';

class ChildBusFee extends BusFee
{
    public function calcFee(int $fee) {
        return $fee / 2;
    }
}