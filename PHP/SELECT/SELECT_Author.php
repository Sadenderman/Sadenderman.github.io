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
    // Select id, firstname, lastname from author table. Order descending by id
    $sql = "select a.id_author, a.author_fname, a.author_lname
     FROM mydb.author a
     ORDER BY a.id_author DESC";

    // Definerer resultat som svaret fra database
    $resultat = $kobling->query($sql);


    // Starter en tabell
    echo "<table>";
    //Lager en rad med overskrifter
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Fornavn</th>";
    echo "<th>Etternavn</th>";

    // avslutter raden
    echo "</tr>";

    // For hver rad i responsen
    while($rad = $resultat->fetch_assoc()) {
        // Definerer variabler som verdier fra responsen
        $ID = $rad["id_author"];
        $AFN = $rad["author_fname"];
        $ALN = $rad["author_lname"];

        // Lager en ny rad i tabellen
        echo "<tr>";

        // Legg inn verdiene fra variablene
        echo "<td>$ID</td>";
        echo "<td>$AFN</td>";
        echo "<td>$ALN</td>";

        // Avslutt raden
        echo "</tr>";
   }

   // Avslutter tabellen
   echo "</table>";
?>
