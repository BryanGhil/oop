<?php 

class Frog{
    public $name;
    

    public function __construct($name){
        $this->name = $name;
    }

    public function jump(){
        echo 'hop hop';
    }

}


?>