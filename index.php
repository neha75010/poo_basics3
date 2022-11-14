<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';

$bicycle = new Bicycle('blue',1);
$rockrider = new Bicycle('yellow',1);
$tornado = new Bicycle('black',1);

$audi = new Car('white', 8, 'essence');
$mercedes = new Car('grey', 4, 'gazoil');

$tanker = new Truck('white', 3, 'fuel', 34000);

$vehicle = new Vehicle('pink', 4);
