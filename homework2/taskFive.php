<?php

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$mercedes = [
    'model' => 'GLE',
    'speed' => 222,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Astra',
    'speed' => 121,
    'doors' => 3,
    'year' => 2017
];

$cars = ['bmw' => $bmw, 'mercedes' => $mercedes, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "<p>{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br></p>";
}