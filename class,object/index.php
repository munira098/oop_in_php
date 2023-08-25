<?php

//declare class
class person{
    public $name;
    public $age;
    public $phoneNmumber;
    public function nationality(){
        echo $this->name. ' is bangladeshi';
    }
}

//echo "  task one... ";
//decarle object
$personone = new person();
$persontwo = new person();
$personone->name='abc';

$personone->age='24';
$personone->phoneNmumber='013839';
$personone->nationality();
$persontwo->name='lkl';
$persontwo->age='33';
$persontwo->phoneNmumber='246755';
//echo $persontwo->name;
//echo '<br>';

echo $personone->name;

echo $persontwo->age;
//print_r($personone);
//rint_r($persontwo);



?> 
