<?php
    // functie: update suplier
    // auteur: BYZ

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatesuplier($_POST) == true){
            echo "<script>alert('suplier is gewijzigd')</script>";
        } else {
            echo '<script>alert("suplier is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getsuplier($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig suplier</title>
</head>
<body>
  <h2>Wijzig suplier</h2>
  <form method="post">
    
    <input type="hidden" id="suplier_name" name="id" required value="<?php echo $row['id']; ?>"><br>
    <label for="suplier_name">suplier_name:</label>
    <input type="text" id="suplier_name" name="suplier_name" required value="<?php echo $row['suplier_name']; ?>"><br>

    <label for="Email">Email:</label>
    <input type="Email" id="Email" name="Email" required value="<?php echo $row['Email']; ?>"><br>

    <label for="country">country:</label>
    <input type="text" id="country" name="country" required value="<?php echo $row['country']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_suplier.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>