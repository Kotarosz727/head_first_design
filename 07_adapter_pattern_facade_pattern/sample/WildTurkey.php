<?php
namespace sample;

require_once 'Turkey.php';

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo 'gobble'. PHP_EOL;
    }

    public function fly()
    {
        echo 'can fly a little'. PHP_EOL;
    }
}