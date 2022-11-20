<?php

use Observer;

class SendSlack implements Observer {
    public function execute() {
        echo "slack was sent";
    }
}