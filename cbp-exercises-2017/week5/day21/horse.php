<?php

require_once('hybrid.php')

class horse extends hybrid {

    public $getsFed = false;
    protected $nr_of_wheels = 0; 
    protected $nr_of_legs = 4;
    public function feed(){
        echo 'Horse is being fed';
        return $getsFed = true;
    };
    public $hairColor = null;
}

?>

