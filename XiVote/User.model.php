<?php

require_once 'config.php';
// User class
class User {
    public $db;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($name, $email, $password, $role) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function register($name, $email, $password, $role) {
        // Implementation for user registration
        echo "regiser<br>";
        try {
         echo "hi", $name, $email, $password, $role;
        } catch (PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
        }
        

    }

}



?>