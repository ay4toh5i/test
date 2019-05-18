<?php

class User {
  // property
  private $name;

  // constructor
  public function __construct(string $name) {
    $this->name = $name;
  }
  
  // method
  public function sayHi(): void {
    echo "Hi, I am $this->name."."\n";
  }
}

$tom = new User("Tom");
$tom->sayHi();
