<?php

require_once 'App/Tools/DataTypes/Str.php';
require_once 'App/Tools/DataTypes/Number.php';

//use App\Tools\DataTypes\Str;
use App\Tools\DataTypes\{Str , Number};

echo Str::rand(10) . "\n";

echo \App\Tools\DataTypes\Str::rand(15). "\n";

echo Number::getTestNumber();