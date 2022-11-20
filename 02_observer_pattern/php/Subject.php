<?php

use Observer;

interface Subject {
    public function addObserver(Observer $observer): void;
    public function removeObserver(Observer $observer): void;
    public function notifyObservers(): void;
}