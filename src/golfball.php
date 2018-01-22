<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 06.01.2018
 * Time: 16:40
 */

namespace stefan\ball;


class golfball extends ball
{
    private $typ = "Golfball";

    public function __construct($name, $farbe, $durchmesser, $material)
    {
        parent::__construct($name, $farbe, $durchmesser, $material);
    }

    /**
     * @return string
     */
    public function getTyp(): string
    {
        return $this->typ;
    }

    public function __toString()
    {
        return 'Typ: '.$this->typ.' '.parent::__toString();
    }


}