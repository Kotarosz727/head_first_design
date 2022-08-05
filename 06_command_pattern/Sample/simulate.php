<?php
namespace Sample;

require_once 'RemoteControl.php';
require_once 'LightOnCommand.php';
require_once 'LightOffCommand.php';

$controller = new RemoteControl;
$controller->setCommand(1, new LightOnCommand);
$controller->setCommand(2, new LightOffCommand);

$controller->executeOnCommand(1);
$controller->executeOnCommand(2);