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
    // Henter id fra fullrating, navn på boken, fornavn og etternavn til forfatter, fornavn og etternavn til anmelder, sjanger og rating. Sorterer id synkende
    $sql = "select f.id_fullrating, b.bookname, a.author_fname, a.author_lname, p.firstname, p.lastname, g.genrename,  f.ratingcomment
     FROM mydb.author a, mydb.person p, mydb.genre g, mydb.book b, mydb.bookfullrating f
     WHERE a.id_author = f.author_id AND p.idperson = f.person_id AND g.idgenre = f.genre_id AND b.idbook = f.book_id
     ORDER BY f.id_fullrating DESC";

    // Definerer resultat som svaret fra database
    $resultat = $kobling->query($sql);


    // Starter tabellen
    echo "<table>";
    // Lager en rad med overskrifter
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Bok navn</th>";
    echo "<th>Forfatter</th>";
    echo "<th>Anmelder</th>";
    echo "<th>Sjanger</th>";
    echo "<th>Rating</th>";

    // avslutter raden
    echo "</tr>";

    // For hver rad i responsen
    while($rad = $resultat->fetch_assoc()) {
        // Definerer variabler som verdier fra responsen
        $ID = $rad["id_fullrating"];
        $BN = $rad["bookname"];
        $AFN = $rad["author_fname"];
        $ALN = $rad["author_lname"];
        $FN = $rad["firstname"];
        $LN = $rad["lastname"];
        $GN = $rad["genrename"];
        $RC = $rad["ratingcomment"];

        // Lager en ny rad i tabellen
        echo "<tr>";

        // Legg inn verdiene fra variablene
        echo "<td>$ID</td>";
        echo "<td>$BN</td>";
        echo "<td>$AFN $ALN</td>";
        echo "<td>$FN $LN</td>";
        echo "<td>$GN</td>";
        echo "<td>$RC</td>";

        // Avslutt raden
        echo "</tr>";
    }
    // Avslutter tabellen
    echo "</table>";
?>