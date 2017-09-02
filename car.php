<?php

namespace App;
class Car
{
    protected $name;
    protected $engine;

    public function __construct($name, $engine)
    {

        $this->name = $name;
        $this->engine = $engine;
    }

    public function getName()
    {
        echo '' . $this->name;
    }



    //машина едет
    public function move($distance,  $direction)
    {
        echo '' . $this->engine->engineOn();
        echo '<br>';
        echo $this->engine->engineWorks($distance) . PHP_EOL; //двигатель работаем - при необходимости охлаждается
        echo '' . $this->engine->engineOff();

        //вы включаете двигатель
        //Включаете нужную передачу (вперед\назад)
//двигаетесь в соответствии с параметрами двигателя, при необходимости включая охлаждения.
        //выключаете двигатель и коробку передач

    }
}
