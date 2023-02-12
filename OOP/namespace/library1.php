<?php

namespace App\Data\Info;

const NAME = 'PHP Eğitim';

function learning()
{
    return 'Öğrenmeye başlayalım.';
}


class Organization {
    static function getAuthor(){
        return 'Mehmet Ali Uysal';
    }

    static function getBookStore(){
        return 'Dikey Eksen';
    }
}