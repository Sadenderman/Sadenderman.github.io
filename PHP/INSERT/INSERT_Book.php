<?php

// Når et skjema sendes
if(isset($_POST["leggtil"]))
{

    // Tilkoblingsinformasjon
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "mydb";

    // Opprette en kobling
    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
    // Sjekk om koblingen virker
    if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
    }

    // Angi UTF-8 som tegnsett
    $kobling->set_charset("utf8");

    // Lagrer skjemafeltene i enklere navn
    $BN = $_POST["BokNavn"];

    // Lager kommandoen med verdiene fra skjema
    $sql = "INSERT INTO book (bookname) VALUES ('$BN')";

    // Kjører komando, sier ifra om noe feiler
    if($kobling->query($sql)) {
    echo "Bok spørring ble gjennomført.";
    } else {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
    }


}
?>