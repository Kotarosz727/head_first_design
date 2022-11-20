<?php

use Observer;

class WriteLog implements Observer {
    public function execute() {
        echo "Log is written.";
    }
}