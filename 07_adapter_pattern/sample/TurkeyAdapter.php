<?php
namespace sample;

require_once 'Duck.php';
require_once 'Turkey.php';

class TurkeyAdapter implements Duck
{
    private Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        $this->turkey->fly();
    }
}
