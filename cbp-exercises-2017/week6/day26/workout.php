<?php $decimal = 12.6666;

$country_names = array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France',
);

$this_country = $country_names['cz'];

echo $this_country;
?>
<hr>
<?php

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);
$money = 123456789000000;
var_dump($money);
?>
<hr>
<?php
echo 'The amount is '.$money.' USD <br>';

echo 'the amount is '.($money/1000). ' thousands USD<br>';

echo 'The amount is '.($money/1000000).' millions USD<br>';

echo 'The amount is '.($money/1000000000).' billions USD<br>';

echo 'The amount is '.($money/1000000000000).' trillion USD<br>'; 

echo 'The amount is close to '.round($money/1000000000000).' trillion USD<br>'; 

echo 'The amount is above '.floor($money/1000000000).' billion USD <br>';

echo 'The amount is under '.ceil($money/1000000000).' billion USD <br>';

echo '<ul>'; 
foreach($country_names as $id => $country) 
{
    
    echo '<li>Nominal GDP value of '.$country.' is $ '.round($country_gdp[$id]/1000000000).' billion</li>';
}
echo '</ul>';

class country {
    protected $name = null;
    protected $gdp = null;
    public function __construct($name, $gdp){
        $this->name = $name;
        $this->gdp = $gdp;
    }
    public function getName(){
        return $this->name;
    }
    public function getGdp(){
        return round($this->gdp/1000000000);
    }
}

$countries = [];

foreach($country_names as $country => $country_name) 
{
    $country = new country($country_name,$country_gdp[$country]);
    $countries[] = $country;

}
var_dump($countries);
echo '<ul>';
foreach($countries as $country){
    echo '<li>Nominal GDP value of '.$country->getName().' is $ '.$country->getGdp().' billion</li>';
}
echo '</ul>';

function vdump($variable){
    echo nl2br(var_export($variable, true));
}

vdump($countries);