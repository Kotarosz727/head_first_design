<?php

namespace php;

use Subject;
use Observer;

class BulletinBoard implements Subject {

    public function __construct(public array $observers)
    {
        
    }

    public function addObserver(Observer $observer): void {
        $this->observers[get_class($observer)] = $observer;
    }

    public function comment() {
        $this->notifyObservers();
    }
    
    public function removeObserver(Observer $observer): void {
        unset($this->observers[get_class($observer)]);
    }
    
    public function notifyObservers(): void {
        foreach ($this->observers as $observer) {
            $observer->execute();
        }
    }
}