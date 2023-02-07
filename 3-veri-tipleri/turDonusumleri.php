<?php

/**
 * Type Casting - Tür Dönüştürme
 * int, integer
 * bool, boolean
 * float, double, real
 * string
 * array
 * object
 * unset - NULL a dönüşüm.
 */

$var1 = 10;
$var2 = '10';

var_dump($var1);
var_dump($var2);

$var3 = (int)'10';
var_dump($var3);

$var4 = (integer)'32 yaşındayım';
var_dump($var4);  // string başındaki 32 değerini aldı kalanını eledi.


$var5 = (integer)'sadece string ifade';
var_dump($var5); //integer a çeviriyor ama 0 değerini veriyor.

$var6 = (int)0.7;
var_dump($var6); //float türü integer a çevirilirken sayı sıfıra yaklaştırılarak yuvarlandır.

$int = (int)((0.1+0.7) * 10);
var_dump($int);
ini_set('precision',17); //hassasiyet ayarlama.
$float = ((0.1+0.7) * 10);
var_dump($float);

/*BOOL TÜRÜNE DÖNÜŞÜM*/
/** Aşağıdaki durumlar her zaman FALSE döndürür */
$bool1 = (bool)0;
var_dump($bool1);

$bool2 = (bool)0.0;
var_dump($bool2);

$bool3 = (bool)"0";
var_dump($bool3);

$arr = array(); //içi boş array
$bool4 = (bool)$arr;
var_dump($bool4);

$arr2 = array('name' => 'ARDA'); //içi dolu array TRUE döndürür
$bool5 = (bool)$arr2;
var_dump($bool5);


/** FLOAT TÜRÜNE DÖNÜŞÜM */


