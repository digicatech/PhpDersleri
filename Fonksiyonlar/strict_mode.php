<?php
//tiplerin doğru olmasını mutlaka sağlamasını aktif hale getiriyoruz.
declare(strict_types=1);

function sum(int $a , int $b):int
{
    return $a + $b;
}


echo sum(2,5);

//echo sum(2,'5');  //bu şekilde bir kullanım hataya neden olacaktır.