<?php

# echo, printなどは関数でないので括弧で引数を囲わなくて良い
echo "hello php\n";

# 変数は、'$'を使って宣言
$msg = "hello from var";

# ','で文字列結合
print $msg."\n";

# 変数の型と中身
var_dump($msg);

# 定数
define("MY_EMAIL", "test@test.org");

echo MY_EMAIL."\n";

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);

# 数値計算
$x = 10 % 3; //1
$y = 30.2 /  4; //7.55
var_dump($x);
var_dump($y);

# 単項演算子(rubyは使えないんだよな。。。)
$z = 5;
var_dump(++$z);
var_dump(--$z);

# 代入演算子
$x += 2;
var_dump($x);

# 文字列
# "" 特殊文字、変数展開
# '' そのまま
$name = "alex";
$s1 = "hello $name!\nhello again!";
$s2 = 'hello $name!\nhello again!';
var_dump($s1);
var_dump($s2);
