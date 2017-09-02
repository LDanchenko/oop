<?php
require_once ('car.php');
require_once ('engine.php');
$car = new \App\Car('d', (new \App\Engine(3)));
$car->move(200);
//$tr = (new \App\Engine(3));
//$tr->engineWorks(160);