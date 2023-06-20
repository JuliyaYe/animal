<?php

namespace App;

class Animal
{
    public $specie;
    public $voice;

    public function __construct($specie, $voice)
    {
        $this->specie = ucfirst(strtolower($specie));
        $this->voice = $voice;
    }
    
    public function getSpecie()
    {
        return $this->specie;
    }

    public function getVoice()
    {
        return $this->voice;
    }
    public function talk()
    {
        echo "$this->specie says '$this->voice'";
    }
}