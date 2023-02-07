<?php

//PSR a göre dosya herhangi bir sınıf dosyası değil ise dosya adı 3 şekilde oluşturulabilir

//StudlyCaps ya da Pascal Case : Kelimelerin baş harfi büyük : DataTypes.php

//camel case : ilk harf hariç baş harfler büyük. : dataTypes.php (şu andaki)

//under score : kelimer arası alt çizgi ile ayrılmış. : data_types.php


/*
    Primitive Data Types: Programlama dilinin dahili olarak destek verdiği veri tipleridir.

    Non-Primitive Data Types : Referans veri tipleri.
*/

/* TEMEL VERİ TİPLERİ */

/** BOOLEAN VERİ TİPİ */

//32 bit sistemlerde max değer 2147483647. 64 bit sistemlerde 9E18  (E notasyonu açılımı 9 x 10 üzeri 18)
//bazı dillerde 64 bir integer a long adı verilebilir. PHP de bu ayrım yoktur.

$bool = false;

echo gettype($bool);

/** INTEGER VERİ TİPİ */

$int = 3;

echo gettype($int);

var_dump(PHP_INT_MAX);  //işletim sisteminizin alabileceği max değeri buradan öğrenebilirsiniz. PHP_INT_MAX bir sabittir.


/* FLOAT VEYA DOUBLE VERİ TİPİ */

$float = 1.1;

echo gettype($float);

/**
 * Hassasiyet 32 ve 64 bit işletim sistemlerine göre değişebilir.
 * Örneğin 32 bit OS için 1.000000000000000111 ile 1.000000000000000000 32 bit işleminde aynı sayı kabul edilirken 
 * 64 bit işletim sisteminde farklı sayılar kabul edilebilir. 32 bitte iki değer arasındaki fark 1.11e-16 değerinden eşit ya da 
 * küçük ise eşit olarak yorumlanacaktır.
 */


 /* STRING VERİ TİPİ */

/**
 * Bir karakter dizgesini ifade eder. Tek tırnak veya çift tırnak kullanılabilir.
 * Tek tırnak içerisine eklenen her şeyi karakter dizesi olarak alır. Çift tırnak 
 * içerisine değişken değerleri enjekte edilebilir.
 */
$str = 'Ineteger için giriğimiz değer $int';
echo $str;

$str = "Ineteger için giriğimiz değer $int";
echo $str;

$str = <<<EOT
Merhaba birden fazla satırdan
oluşan bir string dizesi. İçerisinde değişken
kullanabilirim. Integer değişkenimin değeri $int dür
EOT;

echo $str;

$str = <<<'EOT'
Merhaba birden fazla satırdan
oluşan bir string dizesi. İçerisinde değişken
kullnamam, zira tek tırnak ile başladım. Deneyelim; Integer değişkenimin değeri $int dür
EOT;

echo $str;

// EOT ifadesi önemli değildir. EOT yerine istenilen ifade yazılabilir.


/* NULL VERİ TİPİ */

//Null değeri olmayan anlamına gelir. Boş veya 0 demek değildir.  

$name = null;

echo $name;

/** ARRAY VERİ TİPİ */

//Temel veri tipleri içerisinde "direk değer almayan" birleşik veri tipidir.
//Dizi (array) aslında bir haritadır (map). Diğer dillerde List, Dictionary, Collection veri tipleri yerine geçer.

$names = array();
//echo $names;   // bu şekilde kullanım hataya neden olacaktır.
echo "\n\n";
echo gettype($names);
echo "\n\n";
var_dump($names);

/** OBJECT VERİ TİPİ */
//PHP de nesne veri türüdür. 
$human = new stdClass;
echo gettype($human);
echo "\n\n";
var_dump($human);