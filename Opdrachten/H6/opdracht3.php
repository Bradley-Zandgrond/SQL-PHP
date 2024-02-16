<?php
// Genereer een willekeurige postcode
$rndnmr = mt_rand(1000, 9999);
$rndltr = mt_rand(A, Z);
$postcode = $rndnmr . $rndltr;

// Toon de willekeurige postcode
echo "Willekeurige postcode: ".$postcode;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postcode</title>
</head>
<body>
    
</body>
</html>