<?php

$number = rand(0, 100);

echo "number is ".$number."\n";

if ($number >= 80) {
  echo "great"."\n";
} elseif ($number >= 60) {
  echo "good!"."\n";
} else {
  echo "so so..."."\n";
}

echo "------"."\n";

// 真偽値
/* 
 * false になる場合
 * 文字列：空、"0"
 * 数値: 0, 0.0
 * 論理値： false
 * 配列： 要素の数が0
 * null
 */

$a = rand(0, 10);
$b = rand(0, 10);

echo "a is $a"."\n"."b is $b"."\n";

$max = ($a > $b) ? $a : $b;

echo "max is $max"."\n";

echo "--------"."\n";

$signals = ["red", "blue", "yellow", "gray"];
// array_rand 配列のキーをランダムに取得する
$signal = $signals[array_rand($signals)];

echo "signal is $signal"."\n";
switch ($signal) {
case "red":
  echo "stop!"."\n";
  break;
case "blue":
  echo "go!"."\n";
  break;
case "yellow":
  echo "caution!"."\n";
  break;
default:
  echo "wrong signal"."\n";
  break;
}
