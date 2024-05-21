<?php
// Include necessary files and start session
session_start();

// Check user role (assuming you have a role-based access control system)
if ($_SESSION['username'] == 'morhaf' && isset($_POST['id'])) {
    // Include database connection
    require_once '../controller/config.php';

    // Include CandidateController
    require_once '../controller/CandidateController.php';

    // Create instance of CandidateController
    $candidateController = new CandidateController($db);

    // Delete candidate
    $candidateController->deleteCandidate($_POST['id']);

    // Redirect to admin dashboard or any other page
    header('Location: ../view/admin_dashboard.php');
    exit;
} else {
    // Redirect to a different page or show an access denied message
    echo '<p>Access Denied</p>';
}
?>
