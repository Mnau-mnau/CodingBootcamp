<?php

$name = 'James';

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
);

echo 'The name is '.$bond_info['last_name'].'. '.$bond_info['first_name'].' '.$bond_info['last_name'].'.';

echo 'One day when I was driving my '.$bond_info['car'].' in the Alps '.$bond_info['enemy'].' came along and made me a '.$bond_info['relationship_status'].'. If only I had my '.$bond_info['gun'].' with me!';

$bond_info['last_case'] = 'Spectre';

echo $bond_info['last_case'];

class bond_case {
    protected $name = null;
    protected $year = null;
    protected $enemy = null; 
    static $cases_solved = 0;
    static $girls_met = 0;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function getYear(){
        return $this->year;
    }
    public function setEnemy($enemy) {
        $this->enemy = $enemy;
    }
    public function getEnemy(){
        return $this->enemy;
    }

    public function __construct($year){
        $this->year = $year;
        static::$cases_solved++;
    }
    public $girls = array();

    public function addGirl($name){
        $this->girls[] = $name;
        static::$girls_met++;
    }
    public static function getAvgGirlsPerCase(){
        return static::$girls_met/static::$cases_solved;
    }
}

$spectre = new bond_case(2015);
$spectre->setName('Spectre');
$spectre->setEnemy('Ernst Stavro Blofeld');
$spectre->addGirl('Estrella');
$spectre->addGirl('Lucia Sciarra');
$spectre->addGirl('Madeleine Swann');

$casino = new bond_case(2006);
$casino->setName('Casino Royale');
$casino->setEnemy('Le Chiffre');
$casino->addGirl('Vesper Lynd');
$casino->addGirl('Solange Dimitrios');

echo '<hr>On average Bond has met '.bond_case::getAvgGirlsPerCase().' girls per case.'; 