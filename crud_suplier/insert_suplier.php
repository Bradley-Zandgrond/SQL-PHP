<?php
    // functie: formulier en database insert suplier
    // auteur: BYZ

    echo "<h1>Insert suplier</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertsuplier($_POST) == true){
            echo "<script>alert('suplier is toegevoegd')</script>";
        } else {
            echo '<script>alert("suplier is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="suplier_name">suplier_name:</label>
        <input type="text" id="suplier_name" name="suplier_name" required><br>

        <label for="Email">Email:</label>
        <input type="Email" id="Email" name="Email" required><br>

        <label for="country">country:</label>
        <input type="text" id="country" name="country" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_suplier.php'>Home</a>
    </body>
</html>
