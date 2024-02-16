<?php
// Controleer of de cookie is ingesteld zo niet initialiseer deze op 0
if (!isset($_COOKIE['page_visits'])) {
    $_COOKIE['page_visits'] = 0;
}

// ++ het aantal page visits bij elke pagevisit
$_COOKIE['page_visits']++;

// Zet de cookie met een timelimit van 1 uur
setcookie('page_visits', $_COOKIE['page_visits'], time() + 3600);

// Toon het aantal bezoeken
echo "Je hebt deze pagina ".$_COOKIE['page_visits']." keer bezocht.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Cookie</title>
</head>
<body>
    
</body>
</html>