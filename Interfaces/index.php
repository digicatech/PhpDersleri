<?php

require_once('BirdClass.php');
require_once('ChickenClass.php');

$birdClass = new BirdClass();
$chickenClass = new ChickenClass();

$birdClass->eat();
$birdClass->fly();

$chickenClass->eat();
//$chickenClass->fly(); // hata verecektir. zira flyable interface kullanmıyor.

