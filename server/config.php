<?php



$dbHost = 'localhost';
$dbName = 'ivote_db';
$dbUser = 'morhaf'; 
$dbPass = 'Morhaf578?';   

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
