<?php include('function.php');?>
<!--auteur: BYZ-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<h2>Create Task</h2>
    <form method="post">
        <input type="text" name="naam" placeholder="naam" required>
        <input type="text" name="adres" placeholder="adres" required>
        <input type="text" name="plaats" placeholder="plaats" required>
        <button type="submit" name="submit">Create</button>
    </form>

    <h2>kroeg</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Adress</th>
                <th>Plaats</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['naam']; ?></td>
                    <td><?php echo $row['adres']; ?></td>
                    <td><?php echo $row['plaats']; ?></td>
                    <td>
                        <a href="edit.php?kroegcode=<?php echo $row['kroegcode']; ?>">Edit</a>
                        <a href="index.php?delete=<?php echo $row['kroegcode']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>