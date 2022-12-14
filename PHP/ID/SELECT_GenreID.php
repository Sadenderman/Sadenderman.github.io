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

    // Kommando som henter ut sjangerid og sjanger navn. Returnerer alfabetisk etter navn
    $sql = "select g.idgenre, g.genrename
    FROM mydb.genre g
    ORDER BY g.genrename";

    // Resultat er det databasen returnerer
    $resultat = $kobling->query($sql);

    // For hver rad i resultatet, lag det som et valg i listen
    while($rad = $resultat->fetch_assoc()) {
        // Lagrer feltene som variabler
        $ID = $rad["idgenre"];
        $GN = $rad["genrename"];

        // Variabler brukes til å fylle inn option i select
        echo "<option value='$ID'>$GN</td>";

    }
?>