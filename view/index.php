<?php

require_once '../server/showUser.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>iVote - Home</title>
</head>
<body>
    <header>
    <?php if ($loggedInUser): ?>
        <?php include "./template/nav.php"; ?>
   <?php else: 
       header('Location: ./login.php');
   ?>   
   <?php endif; ?>
    </header>
</body>
</html>
