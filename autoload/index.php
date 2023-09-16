<?php
    spl_autoload_register(function ($class_name) {
       include $class_name . '.php';
    });
    $obj = new first();
    $obj2 = new second();
   
?>
