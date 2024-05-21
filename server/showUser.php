<?php
// Laad de UserController-klasse
require_once '../model/User.php';

// Maak een instantie van de UserController-klasse met de databaseverbinding
$user = new User($db);

// Haal de ingelogde gebruiker op
$loggedInUser = $user->getLoggedInUser();

?>

