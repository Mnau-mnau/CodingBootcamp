<?php
require_once('animal.class.php');

class giraffe extends animal
{
    public static $number_of_giraffes = 0;
    public static $list_of_giraffes = array();
    public static $list_of_giraffes_in_forest = array();
    public static $list_of_giraffes_at_pond = array();
    public static $number_of_thirsty_giraffes = 0;
    public static $number_of_hungry_giraffes = 0;
    public static $number_of_flying_giraffes = 0;

    public static function getNumberOfGiraffes() //number of giraffes from array of giraffes
    {
        return count(static::$list_of_giraffes);
    }


    public static function getNumberOfGirafesInLocation($location) //number of giraffes according to location
    {
        $number = 0;
        foreach(static::$list_of_giraffes as $giraffe){
            if($giraffe->location == $location) {
                $number++;
            }
        }
        return $number;
    }

    public static function getNumberOfHungryGiraffes()
    {
        $number = 0;
        foreach(static::$list_of_giraffes as $giraffe){
            if($giraffe->is_hungry){
                $number++;
            }
        }
        return $number;
    }

    public static function getNumberOfThirstyGiraffes()
    {
        $number = 0;
        foreach(static::$list_of_giraffes as $giraffe){
            if($giraffe->is_thirsty){
                $number++;
            }
        }
        return $number;
    }

    public $number_of_legs = 4;
    public $is_thirsty = true;
    public $is_hungry = true;
    public $location = 'forest';
    public $name = null;


    public function __construct($name) {
        $this->name = $name;
        static::$list_of_giraffes[] = $this; // we take this object and push its main property to the array
    }
    public function drink(){
        $this->is_thirsty = false;
    }
    public function eat(){
        $this->is_hungry = false;
        
    }
    public function sleep() {
        $this->is_thirsty = true;
        $this->is_hungry = true;
    }
    public function go_to_location($location)
    {
            $this->location = $location;
    }
    public function go_to_forest()
    {
            $this->location = 'forest';
    }
    public function go_to_pond()
    {
            $this->location = 'pond';
    }
    public function flyBaby(){
        $this->can_fly = true;
        static::$number_of_flying_giraffes++;
    }
    public function canItFly() {
        if($this->can_fly){
            echo "I can fly!";
        }
        else {
           echo "I can't fly...";
        }
    }

    public function getLocationName() {
        switch($this->location){
            case 'forest':
                return 'in the forest';
            break;
            case 'pond':
                return 'by the pond';
            break;
            case 'flying':
                return 'flies somewhere';
            break;
            case 'ZOO':
                return 'in the ZOO';
            break;
            default:
                return 'lost';
        }
    }
    public function __toString(){
        return $this->name;
    }


};

?>