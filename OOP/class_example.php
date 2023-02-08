<?php

declare(strict_types=1); //tip tanımlı ise doğru değer verilmesini zorunlu yaptık.

class DogClass {
    public string $color;
    public string $eyeColor;
    public int $height;
    public int $length;
    public int $weight;

    private $hiddenProperty; //tip tanımlaması mecbur değil... private olduğu için instance dan direk

    public function sit():bool
    {
        return true;
    }

    public function layDown(): bool
    {
        return true;
    }

    public function shake(): bool
    {
        return true;
    }

    public function come(): bool
    {
        return true;
    }

    private function setHidden (int $deger)
    {
        $this->hiddenProperty = $deger;
    }


    public function getHiddenProperty()
    {
        $this->setHidden(1111); //private fonksiyon sınıf içerisinde kullanılabilir.
        return $this->hiddenProperty;
    }

    
}



$dogDuman = new DogClass();
$dogDuman->color = 'Gri';
$dogDuman->eyeColor ='Siyah';
$dogDuman->height = 60;
$dogDuman->length = 155;
$dogDuman->weight = 24;

var_dump($dogDuman);

var_dump($dogDuman->sit());

var_dump($dogDuman->getHiddenProperty());