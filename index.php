<?php

// index.php


require_once 'Bicycle.php';

$bike = new Bicycle();
$bike->setColor('blue');
$bike->setCurrentSpeed(0);

// Moving bike

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15) . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed(15). ' km/h' . '<br>';
echo $bike->brake();

require_once 'Car.php';

$margeWagon = new Car('orange', 5, 'gasoline');

// Moving margeWagon

echo $margeWagon->start();
echo '<br> Vitesse de la voiture : ' . $margeWagon->setCurrentSpeed(10) . ' km/h' . '<br>';
echo $margeWagon->forward();
echo '<br> Vitesse de la voiture : ' . $margeWagon->setCurrentSpeed(50) . ' km/h' . '<br>';
echo $margeWagon->brake();




