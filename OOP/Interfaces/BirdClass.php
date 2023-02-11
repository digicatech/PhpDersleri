<?php

require_once('AnimalInterface.php');
require_once('FlyableInterface.php');

class BirdClass implements AnimalInterface , FlyableInterface
{
    public function eat()
    {
        echo 'Animal Interface için tanımlanan eat metodu';
    }

    public function fly()
    {
        echo 'Flyable Interface için tanımlanan fly metodu';
    }
}