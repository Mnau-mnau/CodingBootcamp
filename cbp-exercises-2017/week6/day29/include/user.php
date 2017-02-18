<?php

class User
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getName()
    {   
        if(isset($_SESSION['user_id'])){
           $user = $this->db->getUser($_SESSION['user_id']);
           if ($user) {
               return $user['user_name'];
           }
           
        }
        else {
            return false;}
    }
}