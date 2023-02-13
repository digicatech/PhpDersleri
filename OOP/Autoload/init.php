<?php

require_once 'autoload.php';

$staff = new StaffClass();
$staff->setUserName('aaltay');
echo $staff->getUserName();