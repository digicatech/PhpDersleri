<?php

function autoload($name)
{
    $file = __DIR__ . '/%s/%s.php';
    
    if (strpos($name , 'Class') !== false) {
        $file = sprintf($file , 'Classes' , $name);
        if (is_readable($file)) {
            require $file;
            echo "Gerekli olan " . $name . " sınıfının dosyası yüklendi\n";
        }
    }


    
    if (strpos($name , 'Interface') !== false) {
        $file = sprintf($file , 'Interfaces' , $name);
        if (is_readable($file)) {
            require $file;
            echo "Gerekli olan " . $name . " arayüzü dosyası yüklendi\n";
        }
    }

    if (strpos($name , 'Abstract') !== false) {
        $file = sprintf($file , 'Abstracts' , $name);
        if (is_readable($file)) {
            require $file;
            echo "Gerekli olan " . $name . " soyut sınıfının dosyası yüklendi\n";
        }
    }
}

spl_autoload_register('autoload');