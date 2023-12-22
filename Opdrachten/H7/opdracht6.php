<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H7- Opdracht 6</title>
</head>
<body>
    <main>
        <form method="post">
            <p>Cijfer:
                <input type="number" name="cijfer" id="cijfer" step="0.1" min="1" max="10" style="margin-left: 6rem;">
            </p>
            <input type="submit" name="toevoegen" value="Toevoegen">
            <br><br><br><br>
        </form>
    </main>

    <?php
    session_start(); // Start de sessie

    // Initialiseer de array als deze nog niet bestaat
    if (!isset($_SESSION['aantalCijfers'])) {
        $_SESSION['aantalCijfers'] = [];
    }

    if (isset($_POST['toevoegen'])) {
        $ingevoerdCijfer = floatval($_POST['cijfer']);

        // Controleer of het ingevoerde cijfer binnen het geldige bereik ligt
        if ($ingevoerdCijfer >= 1.0 && $ingevoerdCijfer <= 10.0) {
            // Voeg het cijfer toe aan de reeks
            $_SESSION['aantalCijfers'][] = $ingevoerdCijfer;

            // Bereken het nieuwe gemiddelde
            $totaal = array_sum($_SESSION['aantalCijfers']);
            $aantal = count($_SESSION['aantalCijfers']);
            $gemiddelde = $totaal / $aantal;

            // Toon het aantal ingevoerde cijfers
            echo "Aantal ingevoerde cijfers: " . $aantal . "<br>";

            // Toon het gemiddelde
            echo "Gemiddelde: " . number_format($gemiddelde, 1) . "<br>";
        } else {
            // Toon een foutmelding voor een ongeldig cijfer
            echo "Ongeldig cijfer. Voer een cijfer in tussen 1,0 en 10,0.<br>";
        }
    }
    ?>
</body>
</html>