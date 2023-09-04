<?php
#normal class method
class teacher{
    public $name="mina";
    public function show(){
        echo $this->name;
    }

}

$test = new teacher();
$test->show();

#static member

class employe{
    public static $name="karim";
    public static $age=24;
    public static function show(){
        echo self::$name;
    }

}

echo employe::$name;
echo employe::$age;
employe::show();
