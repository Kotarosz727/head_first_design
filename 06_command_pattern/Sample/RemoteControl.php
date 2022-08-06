<?php
namespace Sample;

require_once 'Command.php';

class RemoteControl
{
    private array $onCommnads;
    private array $offCommands;

    public function __construct()
    {
        $this->onCommnads = [];
        $this->offCommands = [];
    }

    public function setOnCommand(int $slot, Command $command)
    {
        $this->onCommands[$slot] = $command;
    }

    public function setOffCommand(int $slot, Command $command)
    {
        $this->offCommands[$slot] = $command;
    }

    public function executeOnCommand(int $slot)
    {
        $command = $this->onCommands[$slot];
        $command->execute();
    }

    public function executeOffCommand(int $slot)
    {
        $command = $this->offCommands[$slot];
        $command->execute();
    }
}