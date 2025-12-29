<?php

include '../functions/function.php';
include '../includes/database.php';


// Formulier check en zorg dat er variabelen mee komen
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = inputCheck($_POST["naam"]);
    $wachtwoord = inputCheck($_POST["ww"]);
    
    // Zoeken in database
    $sql = "SELECT naam, wachtwoord FROM inlog WHERE naam  = '$naam' AND wachtwoord = '$wachtwoord'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    

    // Testen om user te laten zien en wachtwoord
    if ($row) {
        echo "Gebruiker gevonden: " . $row['naam'] , $row['wachtwoord'];
    } else {
        echo "Naam niet gevonden";
    }
}


if ($row) {
    ?>
    
    <html>
        <head>
            <title>Home</title>
        </head>

        <body>
            
}





?>


