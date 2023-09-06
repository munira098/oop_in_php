<?php
class Class {
   public function test() {
       echo "this is a pen\n";
   }
   
   final public function moreTesting() {
       echo "this is a book\n";
   }
}

class ChildClass extends Class {
   public function moreTesting() {
       echo "hello world\n";
   }
}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>
