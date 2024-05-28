<?php
// auteur: BYZ
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deletesuplier($_GET['id']) == true){
        echo '<script>alert("supliercode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_suplier.php'); </script>";
    } else {
        echo '<script>alert("suplier is NIET verwijderd")</script>';
    }
}
?>

