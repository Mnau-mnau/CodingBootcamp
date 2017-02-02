<?php 
class car {
    public $color = null;
    public $manufacturer = null;
    public $model = null;
    public $price = null;
    public $nr_of_wheels = 4;
    public $fuel_type = 'petrol';
    public $owner = 'manufacturer';
    public $tyre_type = null;
    public $current_speed = 0;

    public function speed_up(){
        $this -> current_spped += 10;
    }
    public function brake(){
        $this -> current_speed -= 10;
    }
    public function get_stolen(){
        $this -> owner = 'chop-shop';
    }
    public function be_bought($new_owner) {
        $this -> owner = $new_owner;
    }
}

$new_car = new car();
$new_car->manufacturer = 'Honda';
$new_car->model = 'Accord Tourer';
$new_car->fuel_type = 'diesel';
