<?php

interface Subject {
    public function addObserver();
    public function removeObserver();
    public function notifyObserver();
}