<?php
class abc{
    public function __construct(){
        echo "construct <br>";
    }
    public function hello(){
        echo "hello";

    }
    public function __destruct(){
        echo " destruct";
    }
}
$ob= new abc;

class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

$apple = new Fruit("Apple", "red");
?> 
