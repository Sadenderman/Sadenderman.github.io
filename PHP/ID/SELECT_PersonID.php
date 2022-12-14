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

    // Komando som henter ut id til anmelder, fornavn og etternavn til anmelder og returnerer alfabetisk basert på navn
    $sql = "select p.idperson, p.firstname, p.lastname
    FROM mydb.person p
    ORDER BY p.firstname";

    // Resultat er det databasen returnerer
    $resultat = $kobling->query($sql);

    // For hver rad i resultatet, lag det som et valg i listen
    while($rad = $resultat->fetch_assoc()) {
    // Lagrer feltene som variabler
    $ID = $rad["idperson"];
    $AFN = $rad["firstname"];
    $ALN = $rad["lastname"];

    // Variabler brukes til å fylle inn option i select
    echo "<option value='$ID'>$AFN $ALN</td>";
    }
?>