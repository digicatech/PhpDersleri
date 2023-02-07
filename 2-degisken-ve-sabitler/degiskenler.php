<?php

/**
 * $ etiketi ile tanımlanır.
 * _ (alt tire) veya harf ile başlayabilir. Rakam ile başlayamaz.
 * Türkçe karakter içerebilir ama önerilmez.
 * Büyük - Küçük harf duyarlılığı vardır.
 */


$adSoyad = "Arda ALTAY \n"; //satır başı yapar..

echo $adSoyad;

$yeniDegisken = &$adSoyad;  //yeni değişken diğer değişkeni referans alır.

echo $yeniDegisken;

//-------------------------------------------------

$adSoyad = 'Arda ALTAY \n'; //satır başı çalışmayacaktır. İçerik string olarak kabul edilir.

echo $adSoyad;
echo $yeniDegisken;

//-------------------------------------------------

$yeniDegisken = 'Ömer TEMİZ';   //Referans değişkendeki değişiklik ana değişken içeriğini de değiştirecektir.

echo $adSoyad; 

//-------- New Line -------------//
$text = "
    Birden fazla satura sahip
    uzun yazılar tazabiliriz.
    Bunlar şiir de olabilir.
";

echo $text;


//--------------------------------------------------

$text = "merhaba {$adSoyad}... PHP programlamaya hoş geldin.";

echo $text;