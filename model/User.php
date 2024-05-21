<?php

// UserController.php

require_once '../server/config.php';

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function loginUser($username, $password) {
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $query->bindParam(':username', $username);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            // Passwords match, login successful
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../view/index.php');
            exit;
        } else {
            // Show error message or redirect to login page
            echo "Invalid username or password";
        }
    }
    

    public function registerUser($username, $password) {
        try {
            // Check if the username already exists
            if ($this->isUsernameTaken($username)) {
                echo "Username already taken";
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $query->execute(['username' => $username, 'password' => $hashedPassword]);

            header('Location: ../view/login.php');
            exit;
        } catch (PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
        }
    }

    public function logoutUser() {
        // Sluit de huidige sessie af en leid de gebruiker om naar de uitlogpagina
        session_start();
        session_unset();
        session_destroy();
        header('Location: ../view/index.php');
        exit;
    }

    public function updateProfile($username, $newPassword) {
        try {
            // Update het wachtwoord van de huidige gebruiker in de database
            session_start();
            $currentUser = $_SESSION['username'];

            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $query = $this->db->prepare("UPDATE users SET password = :password WHERE username = :username");
            $query->execute(['username' => $currentUser, 'password' => $hashedPassword]);

            // Leid de gebruiker om naar het profiel of dashboard na het bijwerken
            header('Location: ../view/index.php');
            exit;
        } catch (PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
        }
    }

    private function isUsernameTaken($username) {
        try {
            $query = $this->db->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
            $query->execute(['username' => $username]);
            $count = $query->fetchColumn();
            return ($count > 0);
        } catch (PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
        }
    }

    // Voeg andere gebruikersgerelateerde methoden toe



    public static function getLoggedInUser() {
        // Get the currently logged-in user from the session
        session_start();

        if (isset($_SESSION['username'])) {
            return $_SESSION['username'];
        } else {
            return null;
        }
    }
}

// Add other user-related methods

?>
