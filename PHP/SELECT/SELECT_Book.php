<?php


 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "mydb";
 
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);


 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }


 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
    // Select bokID og boknavn
    $sql = "select b.idbook, b.bookname
     FROM mydb.book b
     ORDER BY b.idbook DESC";

    // Definerer resultat som svaret fra database
    $resultat = $kobling->query($sql);


    // Starter en tabell
    echo "<table>";
    //Lager en rad med overskrifter
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Bok navn</th>";

    // avslutter raden
    echo "</tr>";

    // For hver rad i responsen
    while($rad = $resultat->fetch_assoc()) {
        // Definerer variabler som verdier fra responsen
        $ID = $rad["idbook"];
        $BN = $rad["bookname"];

        // Lager en ny rad i tabellen
        echo "<tr>";

        // Legg inn verdiene fra variablene
        echo "<td>$ID</td>";
        echo "<td>$BN</td>";

        // Avslutt raden
        echo "</tr>";
    }
    // Avslutter tabellen
    echo "</table>";
?>