<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulieren</title>
</head>
<body>
<form method="post">
    <p> Bedrag exclusief BTW
        <input type="text" name="bedrag" value=""></p>
        <input type="radio" name="BTW" value="negen">Laag, 9 %
        <input type="radio" name="BTW" value="eenentwintig">Hoog, 21 %
    <p><input type="submit" name="omzetten" value="Omzetten"></p>    
</form>

<?php

// auteur: Bradley
// Funtie: omzetten

if(isset($_POST)) {
    //var_dump($_POST);

    // validate bedrag
    if (isset($_POST['bedrag']) == true &&
    strlen($_POST['bedrag']) > 0 &&
    filter_var($_POST['bedrag'], FILTER_VARLIDATE_FLOAT)){
        echo "het geposte bedrag is:" . $_POST['bedrag'];
    } else {
        echo "Error: bedrag is niet ingevuld<br>";
    }




    if (isset($_POST['omzetten'])) {
        
        // validate bedrag
        if (strlen($_POST['bedrag']) == 0){
            echo "Error: bedrag is niet ingevuld<br>";
        } elseif (filter_var($_POST['bedrag'], FILTER_VALIDATE_FLOAT) == false) {
            echo "Error: bedrag " . $_POST['bedrag'] . "is niet ok<br>";
        } else {
            // Getal is ok
            echo "Het geposte bedrag is:" . $_POST['bedrag'] . "<br>"
        }







    }

    // check of BTW is aangeklikt



    if ($_POST['BTW'] == "negen") {
        $percentage = 1,09;
    } else {
        $percentage = 1,21;
    }
    $uitkomst = $_POST['bedrag'] * $percentage;

    echo $uitkomst
}

?>

</body>
</html>