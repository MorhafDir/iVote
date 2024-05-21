<!-- update_profile_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <!-- Voeg eventuele stijlen toe -->
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

    <h2>Update Your Profile</h2>
    <form action="../server/update.php" method="post">
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required>

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
