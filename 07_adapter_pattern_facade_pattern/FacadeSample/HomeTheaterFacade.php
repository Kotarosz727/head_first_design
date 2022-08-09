<?php
namespace FacadeSample;

require_once 'Lights.php';
require_once 'Prayer.php';
require_once 'Amplifier.php';
require_once 'Projector.php';

class HomeTheaterFacade
{
    // private Projecter $projecter;
    // private Amplifier $amplifier;
    // private Lamp $lamp;
    // private Prayer $prayer;
    // private Lights $lights;

    public function __construct(
        private Projector $projector,
        private Amplifier $amplifier,
        private Prayer $prayer,
        private Lights $lights,
    )
    {}

    public function startWatchMovie(string $title)
    {
        echo 'preparing HomeTheater...'. PHP_EOL;

        $this->projector->on();
        $this->lights->dim(10);
        $this->amplifier->on();
        $this->prayer->on();
        $this->prayer->set($title);
        $this->prayer->play($title);
    }
}