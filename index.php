<?php
require_once('car.php');
require_once('engine.php');
require_once('transmission.php');
require_once('transmissionAuto.php');
require_once('transmissionManual.php');
$car = new \App\Car('Нива', (new \App\Engine(3)), new \App\TransmissionManual());
$car->move(200, 'вперед', 300);
