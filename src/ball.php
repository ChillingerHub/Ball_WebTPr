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
    public $farbe = "No color found";


    public function __construct($name, $farbe, $durchmesser, $material)
    {
        $this->name = $name;
        $this->farbe = $farbe;
        $this->durchmesser = $durchmesser;
        $this->material = $material;
    }

    public function getVolume(): float
    {
        return pi() * (pow($this->durchmesser, 3) / 6);
    }

    public function __toString()
    {
        return 'Name: ' . $this->name . ' | Farbe: '. $this->farbe. ' | Durchmesser: ' . $this->durchmesser . ' Material: ' . $this->material . ' Volumen' . $this->getVolume();
    }
}