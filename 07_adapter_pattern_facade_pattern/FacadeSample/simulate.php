<?php
namespace FacadeSample;

require_once 'Amplifier.php';
require_once 'HomeTheaterFacade.php';
require_once 'Lights.php';
require_once 'Prayer.php';
require_once 'Projector.php';

$theater = new HomeTheaterFacade(new Projector, new Amplifier, new Prayer, new Lights);
$theater->startWatchMovie('TITANIC');