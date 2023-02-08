<?php

class Kisi
{
    const maxEatCookie = 5;

    private static $isHungry = true;
    private static $eatenCookies = 0;

    public static function eat($cookie = 1)
    {
        if(self::$isHungry)
        {
            self::$eatenCookies += $cookie;
            echo ">>>>> " . self::$eatenCookies . " adet kurabiye yedim.";

            if(self::$eatenCookies >= self::maxEatCookie)
            {
                self::$isHungry = false;
            }
        }
        else
        {
            echo '>>>> doydum, artık yemeyeceğim.';
        }
    }
}

Kisi::eat(10);
echo "\n\n";
Kisi::eat(1);

//program durduğunda statik değerler sıfırlanır.