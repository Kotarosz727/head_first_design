<?php
namespace Sample;

require_once 'RemoteControl.php';
require_once 'LightOnCommand.php';
require_once 'LightOffCommand.php';

$controller = new RemoteControl;
$controller->setOnCommand(1, new LightOnCommand);
$controller->setOffCommand(1, new LightOffCommand);

$controller->executeOnCommand(1);
$controller->executeOffCommand(1);