<?php
namespace FacadeSample;

class Lights
{
    public function dim(int $num)
    {
        echo 'Lights dimming to '. $num. PHP_EOL;
    }
}