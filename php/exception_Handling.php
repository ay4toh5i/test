<?php

function div(int $a, int $b):?float {
  try {
    if ( $b === 0) {
      throw new Exception("cannot divide by 0!");
    }
    return $a / $b;
  } catch (Exception $e) {
    echo $e->getMessage();
    return null;
  }
}

echo div(7,2)."\n";
echo div(5,0)."\n";
