<?php

namespace App;
class Car
{
    protected $name;
    protected $engine;
    protected $transmission;

    public function __construct($name, $engine, $transmission)
    {
        $this->transmission = $transmission;
        $this->name = $name;
        $this->engine = $engine;
    }

    public function getName()
    {
        echo '' . $this->name;
    }

    //машина едет
    public function move($distance, $direction, $speed)
    {
        echo '' . $this->engine->engineOn();
        echo '<br>';
        $this->transmission($direction, $speed);
        //тут надо что то вернуть?

        echo $this->engine->engineWorks($distance) . PHP_EOL; //двигатель работаем - при необходимости охлаждается
        echo '' . $this->engine->engineOff();
        echo '<br>';
        echo '' . $this->transmission->transmissionOff();
    }

    public function transmission($direction, $speed)
    {
        $directionlow = mb_strtolower($direction);
        if ($directionlow == 'вперед') {
            $this->transmission->moveForward($speed);
        } elseif ($directionlow == 'назад') {
            $this->transmission->moveBack($speed);
        } else {
            echo 'Направление неверно!';
        }
    }
}
