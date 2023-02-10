<?php

use Kisi as GlobalKisi;

class Kisi {

    private string $ad;

    function __construct(string $ad)
    {
        $this->ad = $ad;
        echo "kurucu metot calisti...\n";
    }

    function getName()
    {
        return $this->ad;
    }

    function __destruct()
    {
        echo 'Kisi sinifi kaldirildi...';
    }
}


$kisi = new Kisi("Arda ALTAY\n");
echo $kisi->getName();
