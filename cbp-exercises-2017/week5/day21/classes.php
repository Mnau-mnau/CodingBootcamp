<?php 

class car {
    private $color = null;
    private $manufacturer = null;
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
    public function getManufacturer() {
        return $this->manufacturer;
    }
    public function setManufacturer($manufacturer){
        return $this->manufacturer = $manufacturer;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        return $this->color = $color;
    }
    public function __construct($manufacturer = null, $model = null, $color = null) { // not working, why?
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->color = $color;
    } // this method will be called upon construction of the object
}


// $new_car = new car();
// $new_car->setManufacturer('Honda');
// $new_car->model = 'Accord Tourer';
// $new_car->fuel_type = 'diesel';
// $new_car->setColor('Primrose');


$my_car = new car('Lamborghini', 'Diablo Spider','Magic magenta');// not working, wtf?

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Objects</title>
    </head>
    <body>
        <!--<h1>
        <?php //echo $new_car->getManufacturer(); ?>
        </h1>
        <h2>
        <?php //echo $new_car->getColor();?>
        </h2>-->
         <h2>
        <?php echo $my_car->getManufacturer();?>
        </h2>
    </body>
</html>