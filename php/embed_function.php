<?php

$x = 5.6;
// 小数点の切り上げ
echo ceil($x)."\n";
// 切り捨て
echo floor($x)."\n";
// 四捨五入
echo round($x)."\n";
// 乱数
echo rand(1, 10)."\n";

$s1 = "hello";
$s2 = "ねこ";

echo "${s1} の文字数は".strlen($s1)."\n";

// mb_strlenを使うには追加でパッケージのインストールが必要
echo "${s2} の文字数は".mb_strlen($s2)."\n";
printf("%s - %s - %.3f\n",$s1, $s2, $x);

$colors = ["red", "blue", "yellow"];
echo count($colors)."\n";
echo implode("@", $colors)."\n";

$intNum = 1;
$floatNum = .5;
$string = 'abcdefg';

echo is_int($intNum)."\n";
echo is_float($floatNum)."\n";
echo is_string($string)."\n";
