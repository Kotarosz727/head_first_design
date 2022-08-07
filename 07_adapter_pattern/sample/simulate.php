<?php
namespace sample;

require_once 'WildTurkey.php';
require_once 'TurkeyAdapter.php';

require_once 'Duck.php';
require_once 'MallaredDuck.php';


class Exec{
    public function exec(Duck $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}

$exec = new Exec();

$duck = new MallaredDuck();
$exec->exec($duck);

$duck2 = new TurkeyAdapter(new WildTurkey);
$exec->exec($duck2);