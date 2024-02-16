<?php
session_start();

// Controleer of de sessievariabele is ingesteld, zo niet, initialiseer deze op 0
if (!isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits'] = 0;
}

// Verhoog het aantal bezoeken bij elke paginaweergave
$_SESSION['page_visits']++;

// Toon het aantal bezoeken
echo "Je hebt deze pagina ".$_SESSION['page_visits']." keer bezocht.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session start</title>
</head>
<body>
    
</body>
</html>