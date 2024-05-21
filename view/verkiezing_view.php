<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verkiezing</title>
</head>
<body>
    <h1>Verkiezing</h1>

    <?php
    // Include necessary files and create an instance of VerkiezingController
    require_once '../controller/VerkiezingController.php';
    require_once '../model/Verkiezing.php'; // Assuming Verkiezing class is defined in Verkiezing.php

    // Create an instance of Verkiezing
    $verkiezing = new Verkiezing(1, "Nationale Verkiezingen", "2023-01-01", "2023-12-31");

    // Create an instance of VerkiezingController
    $verkiezingController = new VerkiezingController($verkiezing);

    // Check if the verkiezing is ongoing (you may use more complex logic here)
    $verkiezingIsOngoing = strtotime(date("Y-m-d")) >= strtotime($verkiezing->getStartDatum()) &&
                           strtotime(date("Y-m-d")) <= strtotime($verkiezing->getEindDatum());

    // Display appropriate buttons based on the verkiezing status
    if ($verkiezingIsOngoing) {
        echo '<p>De verkiezing is momenteel aan de gang.</p>';
        echo '<button onclick="startVerkiezing()">Start Verkiezing</button>';
        echo '<button onclick="eindigVerkiezing()">Eindig Verkiezing</button>';
    } else {
        echo '<p>De verkiezing is niet aan de gang.</p>';
    }
    ?>

    <script>
        function startVerkiezing() {
            // Add JavaScript logic to handle starting the verkiezing
            alert("Verkiezing wordt gestart!");
        }

        function eindigVerkiezing() {
            // Add JavaScript logic to handle ending the verkiezing
            alert("Verkiezing wordt beëindigd!");
        }
    </script>
</body>
</html>
