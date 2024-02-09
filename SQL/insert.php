<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Voeg Fiets Toe</h1>
    <form action="insert_db.php" method="post">
        <label for="merk">Merk: </label>
        <input type="text" name="merk"><br>
        <label for="type">Type: </label>
        <input type="text" name="type"><br>
        <label for="prijs">Prijs: </label>
        <input type="text" name="prijs"><br>
        <label for="foto">Foto (bestandsnaam): </label>
        <input type="text" name="foto"><br>  
        <input type="submit" value="voeg toe">
    </form>
</body>
</html>