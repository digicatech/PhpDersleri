<?php

require_once('AnimalInterface.php');


class ChickenClass implements AnimalInterface
{
    public function eat()
    {
        echo 'Animal Interface için tanımlanan eat metodu';
    }
}