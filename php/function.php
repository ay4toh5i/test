<?php

// 型チェック php7 ~ 
function makeGreetingSentence(string $name = "anonymous"):string {
  return "Hello ${name}!";
}

echo makeGreetingSentence("sakamoto")."\n";
echo makeGreetingSentence()."\n";
