<?php

// login.php

require_once '../model/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($db);
    $user->loginUser($username, $password);
}

?>
