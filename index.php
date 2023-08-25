<?php
// Parent class
abstract class person {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class kamal extends person {
  public function intro() : string {
    return "hello! I'm an $this->name!"; 
  }
}

class mini extends person {
  public function intro() : string {
    return "hi everyone! I'm a $this->name!"; 
  }
}

class mina extends person {
  public function intro() : string {
    return "hlw ! I'm a $this->name!"; 
  }
}

// Create objects from the child classes
$kamal = new kamal("kamal");
echo $kamal->intro();
echo "<br>";

$mini = new mini("mini");
echo $mini->intro();
echo "<br>";

$mina = new mina("mina");
echo $mina->intro();
?>