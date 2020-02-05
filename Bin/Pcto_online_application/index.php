<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <title>Pagina Iniziale</title>
  </head>
  <header>
    <h1 align = "center">Home</h1>
  </header>
  <body>
    <?php
      if (empty($_SESSION["user"])){
        echo "<h2>Per potere usufruire di tutte le funzioni della pagina, eseguire il LOGIN</h2>";
        echo "<a href=\"login/login.html\"><h3>Clicca qui per fare il login</h3></a>";
      }
      else {
        echo "<h3>Ciao, bentornato. Scegli quale pagina vuoi visitare</h3>";
        echo "<a href=\"html_page/ora.php\"><h3>Orario</h3></a>";
        echo "<a href=\"html_page/data.php\"><h3>Data</h3></a>";
        echo "<a href=\"login/logout.php\"><h3>Clikkare qui per eseguire il logout</h3></a>";
      }
      #elseif($_SESSION["user"] == "primi") {
      #}
     ?>
  </body>
</html>
