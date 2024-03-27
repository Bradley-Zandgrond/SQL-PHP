o<?php

// haal brouwer gegevens op uit database
include "function.php"
//connect
SELECT * FROM brouwer

// Maak dropdown
    $text = "
    choose a brouwcode:
        <select name='brouwcode' >
        
        foreach ($result as $row){
            $text
        }
            </select>"
