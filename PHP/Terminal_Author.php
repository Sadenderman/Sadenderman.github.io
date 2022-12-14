<!DOCTYPE html>
<html lang="no">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swag nettside</title>
  <link rel="stylesheet" href="/bindex.css">

  <!-- Stylesheet som bare brukes av php sidene -->
  <link rel="stylesheet" type="text/css" href="/PHP/_php.css">
</head>
<body>

<header>
    <nav>
      <ul>
        <li><a href="/index.html">Hjem</a></li>

        <!-- Dropdown menu -->
        <div class="dropdown">
          <button class="dropbtn">Skole</button>
          <div class="dropdown-content">
            <a href="/imskole.html">Generelt</a>
            <a href="/PHP/index.php">PHP</a>
          </div>
        </div>

        <li><a href="/arbeid.html">Arbeid</a></li>
        <li><a href="/socials.html">Kontakt meg!</a></li>
      </ul>
    </nav>
</header>


    <h1 class="headmain">PHP forfatter</h1> <br/>

    <!-- Navigering mellom de forskjellige php sidene -->
    <!-- Plasserer knappene horisontalt -->
    <div style="display: flex; flex-direction: row;">
        <a href="Terminal_Fullrating.php" style="padding: 16px;">Legg til anmeldelse</a>
        <a href="Terminal_Book.php" style="padding: 16px;">Legg til bok</a>
        <a href="Terminal_Author.php" style="padding: 16px;">Legg til forfatter</a>
        <a href="Terminal_Person.php" style="padding: 16px;">Legg til person</a>
        <a href="Terminal_Genre.php" style="padding: 16px;">Legg til sjanger</a>
    </div>

    <!--Her er innholdet på siden -->
    <div class="paramain">

        <!-- Overskrift -->
        <h1>Legge inn forfatter i databasen</h1>

        <!-- inkluderer insert filen -->

        <?php
        include 'INSERT/INSERT_Author.php'
        ?>

        <!-- Legger inn skjemaet på siden. Brukes av insert filen -->
        <form method="POST">
            <input type="text" name="Fornavn">
            Forfatter fornavn

            </br></br>

            <input type="text" name="Etternavn">
            Forfatter etternavn

            </br></br>

            <input type="submit" name="leggtil" value="Legg til">
        </form>

        </br></br>

        <!-- Viser hva som er i databasen -->
        <h1>Forfattere i databasen</h1>
        <?php
        include 'SELECT/SELECT_Author.php'
        ?>
    </div>


</body>
</html>