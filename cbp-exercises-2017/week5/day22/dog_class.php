<?php 

class dog
{
  public $color = 'unspecified';

  public static $nr_of_dogs = 0;

  public function bark()
  {
    echo "WOOF!";
  }

  public static function get_nr_of_dogs()
  {
    return static::$nr_of_dogs;
  }

  public function __construct()
  {
    static::$nr_of_dogs++;
  }
  public function __destruct()
  {
      static::$nr_of_dogs--;
  }
}

$my_dog = new dog(); // dog::$nr_of_dogs increased by 1
$some_dog = new dog();

// because it's public I can access the static property from anywhere
echo dog::$nr_of_dogs;

unset($my_dog);

echo dog::$nr_of_dogs;

class request{
    public $get_values = [];
    public $post_values = [];
    public $is_post = false;
    public static $instance = null; 
    public static function getInstance(){
        if(static::$instance === null){
            static::$instance = new request();
        }
        return static::$instance;
    }
    
}

$request = new request();