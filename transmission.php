<?php

namespace App;
class Transmission
{



    public function moveForward($speed)
    {
        echo 'Передача - вперед';
        echo '<br>';
    }

    public function moveBack($speed)
    {
        echo 'Передача - назад';
        echo '<br>';
    }

    public function transmissionOff()
    {
        echo 'Выключили передачу';
        echo '<br>';
    }
}
