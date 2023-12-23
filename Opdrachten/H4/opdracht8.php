<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H4 - opdracht 8</title>
</head>
<body>
    <?php
        $age = 20;
        $scooterdriverlicence = 16;
        $vote = 18;
        $votepass = true;

        if ($age >= $scooterdriverlicence) {
            echo "You can get your driver licence" . "<br>";
        } else {
            echo " You are not old enough to get your licence" . "<br>";
        }
        if ($age >= $vote && $votepass == true) {
            echo "You can vote" . "<br>";
        } else {
            echo "You are not old enough to vote" . "<br>";
        }
    ?>
</body>
</html>