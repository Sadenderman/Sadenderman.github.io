<!DOCTYPE html>
<html lang="en" lang="no">
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

            <!-- Navigering mellom de forskjellige php sidene -->
            <!-- Plasserer knappene horisontalt -->
            <h1 class="headmain">PHP kilder</h1> <br/>
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
        <h1>Legge inn anmeldelser i databasen</h1>

        <!-- inkluderer insert filen -->

        <?php
        include 'INSERT/INSERT_BookFullRating.php'
        ?>

        <!-- Legger inn skjemaet på siden. Brukes av insert filen -->
        <form method="POST">
            <!-- Lager en lite dropdown meny med info fra db -->
            <select name="AuthorID">
            <?php
            include 'ID/SELECT_AuthorID.php'
            ?>
            </select>
            Forfatter ID

            </br></br>

            <!-- Lager en lite dropdown meny med info fra db -->
            <select name="PersonID">
            <?php
            include 'ID/SELECT_PersonID.php'
            ?>
            </select>
            Anmelder ID

            </br></br>

            <!-- Skriver anmeldelse av boken her -->
            <input type="text" name="Rating">
            Rating

            </br></br>

            <!-- Lager en lite dropdown meny med info fra db -->
            <select name="GenreID">
            <?php
            include 'ID/SELECT_GenreID.php'
            ?>
            </select>
            Sjanger ID

            </br></br>

            <!-- Lager en lite dropdown meny med info fra db -->
            <select name="BookID">
            <?php
            include 'ID/SELECT_BookID.php'
            ?>
            </select>
            Bok ID

            </br></br>

            <input type="submit" name="leggtil" value="Legg til">
        </form>


        </br></br>

        <!-- Viser hva som er i databasen -->
        <h1>Anmeldelser i databasen</h1>
        <?php
        include 'SELECT/SELECT_Rating.php'
        ?>
    </div>


</body>
</html>