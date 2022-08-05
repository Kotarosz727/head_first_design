<?php
namespace Sample;

require_once 'Light.php';
require_once 'Command.php';

class LightOffCommand implements Command
{
    private Light $light;

    public function __construct()
    {
        $this->light = new Light();
    }

    public function execute()
    {
        $this->light->off();
    }
}