<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 06.01.2018
 * Time: 16:22
 */

namespace stefan\ball;

abstract class ball
{
    public $name = "No name found";
    public $durchmesser = "No diameter found";
    public $material = "No material found";

    public function __construct($name, $durchmesser, $material)
    {
        $this->name = $name;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }

    public function getVolume():float{
        return pi()*(pow($this->durchmesser, 3)/6);
    }

    public function __toString()
    {
        return 'Name: '.$this->name.' Durchmesser: '.$this->durchmesser.' Material: '.$this->material.' Volumen'.$this->getVolume();
    }

}