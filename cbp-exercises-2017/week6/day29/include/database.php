<?php

class Database 
{
    protected $db; // inner variable, not accessible from the outside

    public function __construct() //creates the new object - database
    {
        $this->db =new PDO('mysql:host=localhost;dbname=bootcamp_eshop;charset=utf8', 'root', ''); //this connects the database with our files
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove for production
    }
    public function insertProducts($name, $price, $size, $color, $weight) //this inserts products into the database
    {
            $stmt = $this->db ->prepare('INSERT INTO products(name, price, size, color, weight) VALUES (?, ?, ?, ?, ?)');
            $stmt->execute([$name, $price, $size, $color, $weight]);
            return $this->db->lastInsertId();
    }
    public function getProducts() //this gets the data from the database for displaying on the site
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color, weight FROM products');
        $stmt->execute();
        return $stmt->fetchAll(); // check what this does in the documentation
    }
    public function getProduct($id)
    {
        $stmt = $this->db->prepare('SELECT id, name, price, size, color, weight FROM products WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function insertOrder($user_id) 
    //this creates a new order and connects it to the user - further work would need to create user and later insert its id to the order
    {
        $stmt = $this->db->prepare('INSERT INTO orders(user_id, time)  VALUES (?, now())');
        $stmt->execute([$user_id]);
        return $this->db->lastInsertId();
    }
    public function insertOrder_has_products($order_id, $product_id) //function to push selected product into the database order_has_products
    {
        $stmt = $this->db->prepare('INSERT INTO order_has_products(order_id, product_id) VALUES (?, ?)');
        $stmt->execute([$order_id, $product_id]);
        return $this->db->lastInsertId();
        // is this all?
    }
    public function insertUser($user_name, $first_name,$last_name, $email, $password)
    {
        $stmt = $this->db->prepare('INSERT INTO users(user_name, first_name, last_name, email, password) VALUES (?,?,?,?,?)');
        $stmt->execute([$user_name, $first_name,$last_name, $email, password_hash($password, PASSWORD_DEFAULT)]); //this is a basic form of encryption
        return $this->db->lastInsertId();
    }
     public function getUser($id)
    {
        $stmt = $this->db->prepare('SELECT id, user_name, first_name, last_name, email, password FROM users WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
     public function getUserByEmail($email)
    {
        $stmt = $this->db->prepare('SELECT id,  email, password FROM users WHERE email = ?');
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}
