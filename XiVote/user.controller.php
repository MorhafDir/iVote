<?php

require_once 'user.model.php';

// UserController
class UserController {
    
    public function register() {
        // Implementation for handling user registration
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];
        
            $user = new User($name, $email, $password, $role);
            $user->register($name, $email, $password, $role);
        }
    }

   

}

?>