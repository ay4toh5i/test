<?php

class User {
  // property
  private $name;
  private static $count = 0;

  // constructor
  public function __construct(string $name) {
    $this->name = $name;
    self::$count++;
  }

  public static function numObject(): int {
    return self::$count;
  }
  
  // method
  public function sayHi(): void {
    echo "Hi, I am $this->name."."\n";
  }
}

