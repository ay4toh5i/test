<?php

require_once 'class.php';

$tom = new User("Tom");
$tom->sayHi();

$bob = new User("Bob");
$bob->sayHi();

echo User::numObject()." users exist"."\n";
