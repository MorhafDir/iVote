<?php

// update_profile.php

require_once '../model/User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $newPassword = $_POST['new_password'];

    $user = new User($db);
    $user->updateProfile($_SESSION['username'], $newPassword);

}


?>
