<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>iVote - Home</title>
</head>
<body>

<?php

// Include necessary files and start session
session_start();

// Check user role (assuming you have a role-based access control system)
if ($_SESSION['username'] == 'morhaf') {
    // Show admin dashboard with options to add, update, and delete candidates
    echo '<h1>Admin Dashboard</h1>';

    // Include database connection
    require_once '../server/config.php';

    // Include CandidateController
    require_once '../controller/CandidateController.php';

    // Create instance of CandidateController
    $candidateController = new CandidateController($db);

    // Check if an ID is provided for updating a candidate
    if (isset($_GET['updateCandidateId'])) {
        $updateCandidateId = $_GET['updateCandidateId'];
        $candidateToUpdate = $candidateController->getCandidateById($updateCandidateId);

        if ($candidateToUpdate) {
            // Form for updating a candidate
            echo '
                <h2>Update Candidate</h2>
                <form action="../server/update_candidate.php" method="post">
                    <input type="hidden" name="id" value="' . $candidateToUpdate['id'] . '">

                    <label for="name">Candidate Name:</label>
                    <input type="text" name="name" value="' . $candidateToUpdate['name'] . '" required>

                    <label for="party">Party:</label>
                    <input type="text" name="party" value="' . $candidateToUpdate['party'] . '" required>

                    <label for="position">Position:</label>
                    <input type="text" name="position" value="' . $candidateToUpdate['position'] . '" required>

                    <button type="submit">Update Candidate</button>
                </form>
            ';
        } else {
            echo '<p>Candidate not found</p>';
        }
    } else {
        // Display candidates with update and delete buttons
        $candidates = $candidateController->getAllCandidates();

        echo '<h2>Candidates</h2>';
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th><th>Party</th><th>Position</th><th>Actions</th></tr>';

        foreach ($candidates as $candidate) {
            echo '<tr>';
            echo '<td>' . $candidate['id'] . '</td>';
            echo '<td>' . $candidate['name'] . '</td>';
            echo '<td>' . $candidate['party'] . '</td>';
            echo '<td>' . $candidate['position'] . '</td>';
            echo '<td>';
            echo '<a href="?updateCandidateId=' . $candidate['id'] . '">Update</a>';
            echo '<form action="../server/delete_candidate.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="' . $candidate['id'] . '">
                    <button type="submit">Delete</button>
                  </form>';
            echo '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    // Form for adding a candidate
    echo '
        <h2>Add Candidate</h2>
        <form action="../server/add_candidate.php" method="post">
            <label for="name">Candidate Name:</label>
            <input type="text" name="name" required>

            <label for="party">Party:</label>
            <input type="text" name="party" required>

            <label for="position">Position:</label>
            <input type="text" name="position" required>

            <button type="submit">Add Candidate</button>
        </form>
    ';
} else {
    // Redirect to a different page or show an access denied message
    echo '<p>Access Denied</p>';
}

?>


</body>
</html>

