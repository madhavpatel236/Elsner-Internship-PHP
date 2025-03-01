<?php

abstract class car{
    public $name;
    abstract protected function get_name($name);

}

class BMW extends car{
    public function get_name($name, $model = "hello" ){
        echo " Car name is: " . $name . "<br />" ;
        
    }
}

class Defender extends car{
    public function get_name($name){
        echo " Car name is: " . $name . "<br />"  ;
    }
}

$bmw = new BMW();
$bmw->get_name("BMW", "m4");

$defender = new Defender(); 
$defender->get_name("Defender")  ;

?>