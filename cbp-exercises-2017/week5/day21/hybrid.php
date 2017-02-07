//hybrid
<?php
require_once('classes.php');

class hybrid extends car {
   public $has_battery_engine = true;
   private $consumption_saving = null;
   public function setConsumption($saving){
       return $this->consumption_saving = $saving;
   }
   public function getConsumption(){
       return $this->consumption_saving;
   }
   public $avgSpeed = null; 
   protected function travel($distance){
        $avgSpeed = max(1, $this->avgSpeed);
        return $distance / $avgSpeed;
   }
}



$toytaPrius = new hybrid();
$toytaPrius->setConsumption(0.4);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Objects</title>
    </head>
    <body>
        <h1>
        <?php echo $toytaPrius->getConsumption(); ?>
        </h1>

    </body>
</html>
