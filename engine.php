<?php

namespace App;

class Engine
{
    protected $horsePower;
    protected $temperature = 0;



    public function __construct($horsePower)
    {

        $this->horsePower = $horsePower;
    }

    public function engineWorks($distance)
    {
        for ($i = 0; $i <= $distance; $i=$i+10) {
            echo 'Проехали метров '. $i . PHP_EOL;
            $this->temperature += 5;
            echo 'Температура ' . $this->temperature;
            echo '<br>';
            if ($this->temperature >= 90) {
                $this->chillOut($this->temperature);
            }
        }
    }


    public function engineSpeed()
    {
        return ($this->horsePower) * 2;
    }

    public function engineOn()
    {
        echo 'Двигатель включен';
    }

    public function engineOff()
    {
        echo 'Двигатель выключен';
    }

    public function chillOut($temperature)
    {
        echo 'Охладили двигатель, температура' . $this->temperature = $temperature - 10;
        echo '<br>';
    }
}
