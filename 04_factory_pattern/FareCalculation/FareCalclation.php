<?php
namespace FareCalculation;

require_once 'FareInterface.php';

class FareCalclation
{
    protected int $start = 0;
    protected int $end = 0;
    protected int $baseFare;
    private FareInterface $fare;

    public function calcFare(): int
    {
        if ($this->start === 0) {
            echo '乗車地点が設定されていません';
            return false;
        }

        if ($this->end === 0) {
            echo '降車地点が設定されていません';
            return false;
        }

        if ($this->start && $this->start > $this->end) {
            echo '乗車地点を降車地点より前に設定してください';
            return false;
        }

        $this->fare = $this->createFare();
        return $this->fare->getFare();
    }

    public function calcBaseFare(): int
    {
        return ($this->end - $this->start) * $this->baseFare; 
    }
}