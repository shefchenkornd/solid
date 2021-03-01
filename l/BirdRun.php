<?php

class BirdRun
{
    private $bird;
    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    public function run()
    {
        $speed = $this->bird->fly();
        // ... some action
    }
}