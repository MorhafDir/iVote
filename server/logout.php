<?php

// logout.php

require_once '../model/User.php';

// We gebruiken hier geen formulier omdat het uitloggen wordt geactiveerd door een link
// en geen POST-verzoek.

$user = new User($db);
$user->logoutUser();

?>
