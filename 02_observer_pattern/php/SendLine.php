<?php

use Observer;

class SendLine implements Observer {
    public function execute() {
        echo "Line was sent";
    }
}