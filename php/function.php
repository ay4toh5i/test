<?php

// 型チェック php7 ~ 
function makeGreetingSentence(string $name = "anonymous"):string {
  return "Hello ${name}!";
}

echo makeGreetingSentence("sakamoto")."\n";
echo makeGreetingSentence()."\n";

function test($object = null) {
  return $object;
}

echo test(null);
var_dump(test(null));

function test1(int $number) {
  return $number;
}

// echo test1(null);

function test2(?int $number) {
  return $number;
}

echo test2(null);
var_dump(test2(null));
echo "----"."\n";
echo test();
