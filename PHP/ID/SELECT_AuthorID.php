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

    // Kommando som henter ut id, fornavn og etternavn til en forfatter og returnerer det alfabetisk på fornavnet
    $sql = "select a.id_author, a.author_fname, a.author_lname
     FROM mydb.author a
     ORDER BY a.author_fname";

    // Resultat er det databasen returnerer
    $resultat = $kobling->query($sql);

    // For hver rad i resultatet, lag det som et valg i listen
    while($rad = $resultat->fetch_assoc()) {
        // Lagrer feltene som variabler
        $ID = $rad["id_author"];
        $AFN = $rad["author_fname"];
        $ALN = $rad["author_lname"];

        // Variabler brukes til å fylle inn option i select
        echo "<option value='$ID'>$AFN $ALN</td>";

    }
?>