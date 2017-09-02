<?php

namespace App;

class TransmissionManual extends Transmission
{
    public function moveForward($speed)
    {
        parent::moveForward($speed);
        if (0 <= $speed && $speed <= 20) {
            echo 'Передача - №1';
            echo '<br>';
        } elseif ($speed > 20 && $speed < 400) {
            echo 'Передача - №2';
            echo '<br>';
        } else {
            echo 'Нет такой скорости';
            echo '<br>';

        }
    }
}