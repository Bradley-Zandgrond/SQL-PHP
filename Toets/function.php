<?php
//auteur: BYZ
include('connect.php');

//CRUD operations
//Create operation
if(isset($_POST['submit']))
{
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $plaats = $_POST['plaats'];


    $sql = "INSERT INTO kroeg (naam,adres,plaats) VALUES ('$naam','$adres','$plaats')";


    if(mysqli_query($conn, $sql))
    {
        header('Location: index.php');
        exit;
    } else
    {
        echo 'Error:' . $sql . '<br>' . mysqli_error($conn);
    }
}

//Read operation
$sql = "SELECT * FROM kroeg";
$result = mysqli_query($conn, $sql);


//Update operation
if(isset($_POST['update']))
{
    $id = $_POST['kroegcode'];
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $plaats = $_POST['plaats'];


    $sql = "UPDATE kroeg SET naam='$naam', adres='$adres' WHERE kroegcode='$id'";

    if(mysqli_query($conn, $sql))
    {
        header('Location: index.php');
        exit;
    } else
    {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }
}

//Delete operation
if (isset($_GET['delete']))
{
    $id = $_GET['delete'];

    $sql = "DELETE FROM kroeg WHERE id='$id'";

    if (mysqli_query($conn, $sql))
    {
        header('Location: index.php');
        exit;
    } else
    {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }
}
?>