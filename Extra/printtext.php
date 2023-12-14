<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print text</title>
</head>
<body>
<?php

// auteur: Bradley
// functie: print text vertical
/*
abcd

a
b
c
d
*/

function printVertical($text) {
    //code of function
    echo "$text";
    echo "<br>";

    $len = strlen($text);
    for ($i=0; $i < $len; $i++) { 
        echo $text[$i] . "<br>";
    }
}

// main

printVertical("abcd");

printVertical("123456789");

?>
</body>
</html>