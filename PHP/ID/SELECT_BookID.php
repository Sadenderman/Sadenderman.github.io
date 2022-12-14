<?php

    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "mydb";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);



    //Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    // Kommando som henter ut bok id og navn på boken. Returnerer det alfabetisk
    $sql = "select b.idbook, b.bookname
     FROM mydb.book b
     ORDER BY b.bookname";

    // Resultat er det databasen returnerer
    $resultat = $kobling->query($sql);

    // For hver rad i resultatet, lag det som et valg i listen
    while($rad = $resultat->fetch_assoc()) {
        // Lagrer feltene som variabler
        $ID = $rad["idbook"];
        $BN = $rad["bookname"];

    // Variabler brukes til å fylle inn option i select
    echo "<option value='$ID'>$BN</td>";
    }
?>
