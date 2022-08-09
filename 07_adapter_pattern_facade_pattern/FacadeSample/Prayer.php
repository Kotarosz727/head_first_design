<?php
namespace FacadeSample;

class Prayer
{
    private string $title = '';

    public function on()
    {
        echo 'Prayer on.'. PHP_EOL;
    }

    public function set(string $title)
    {
        $this->title = $title;
        echo 'set '. $title. PHP_EOL; 
    }

    public function play()
    {
        if (!$this->title) {
            echo 'movie is not set.'. PHP_EOL;
            return;
        }

        echo 'start to play '. $this->title. PHP_EOL;
    }
}