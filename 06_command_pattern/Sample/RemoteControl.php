<?php
namespace Sample;

require_once 'Command.php';

class RemoteControl
{
    private array $commnads;

    public function __construct()
    {
        $this->commnads = [];
    }

    public function getCommnads()
    {
        print_r($this->commands);
    }

    public function setCommand(int $slot, Command $command)
    {
        $this->commands[$slot] = $command;
    }

    public function executeOnCommand(int $slot)
    {
        $command = $this->commands[$slot];
        $command->execute();
    }

    public function executeOffCommand(int $slot)
    {
        $this->commnads[$slot]->execute();
    }
}