<?php

require_once('library1.php');

echo App\Data\Info\NAME;
echo "\n";
echo App\Data\Info\learning();
echo "\n";
echo App\Data\Info\Organization::getAuthor(). ' / ' . App\Data\Info\Organization::getBookStore();