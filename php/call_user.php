<?php

require_once 'class.php';

use testClass\Lib;

$tom = new Lib\User("Tom");
$tom->sayHi();

$bob = new Lib\User("Bob");
$bob->sayHi();

echo Lib\User::numObject()." users exist"."\n";
