<?php

namespace App\Tools\DataTypes;

use BadMethodCallException;
use InvalidArgumentException;

class Str {
    public static function rand($length =8)
    {
        if ($length === null) {
            throw new BadMethodCallException(__METHOD__. ' uzunlık değeri gödnerilmelidir.');
        }

        if (!is_numeric($length)) {
            throw new InvalidArgumentException(__METHOD__ . ' uzunluk değeri numarik olmalıdır');
        }

        //$length = (integer)$length;
        // veya aşağıdaki şekilde de olabilir.
        $length = intval($length);

        static $characters = '0123456789abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ';

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i=0; $i < $length; $i++) { 
            $randomString .= $characters[rand(0 , $charactersLength -1)];
        }

        return $randomString;

    }
}