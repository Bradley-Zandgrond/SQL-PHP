<?php
//auteur: BYZ
include('function.php');

$id = $_GET['kroegcode'];
$sql = "SELECT * FROM kroeg WHERE kroegcode='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h2>Edit</h2>
    <form method="post" action="index.php">
        <input type="hidden" name="id" value="<?php echo $row['kroegcode']; ?>">
        <input type="text" name="naam" value="<?php echo $row['naam']; ?>" required>
        <input type="text" name="adres" value="<?php echo $row['adres']; ?>" required>
        <input type="text" name="plaats" value="<?php echo $row['plaats']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>