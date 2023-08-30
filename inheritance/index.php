<?php

class worker{
    public $name;
    public $position;
    
    public $salary;
     function __construct($n,$p,$a)
    {

        $this->name=$n;
        $this->position=$p;
       $this->salary=$a;
   }
   

    function info()
    {
        echo " Worker Details <br>" ;
        echo "The name of worker is <br>" .$this->name. "<br>" ;
        echo "position is ".$this->position. "<br>";
        echo "Worker salary is <br>  " .$this->salary;
        //echo $this->name;

    }
}

class manager extends worker{

    public $ta=1000;
    public $totalSalary;

    function info()
    {
        $this->totalSalary=$this->salary +$this->ta;
        echo " Manager Details <br>" ;
        echo "The name of worker is <br>" .$this->name. "<br>" ;
        echo "position is ".$this->position. "<br>";
        echo "Worker salary is <br>  " .$this->totalSalary;
   

}
}
   $m1 = new manager("rahim","labour",3400);
    $w1 = new worker("karim","labour",3400);
    //$b->ink_colour="black";
    //$b->thickness="thin";
    $m1->info();
    $w1->info();

?>
