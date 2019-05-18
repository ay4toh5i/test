<?php

$sales = array(
  "tanaka" => 100,
  "sato" => 150,
  "inoue" => 125);

// php 5.4~

$gripStrengthes = [
  "tanaka" => 30,
  "sato" => 27,
  "inoue" => 55];

foreach ($sales as $key => $value) {
  echo "$key $value"."\n";
}

$colors = ["red", "bule", "pink"];
foreach ($colors as $color) {
  echo $color."\n";
}
