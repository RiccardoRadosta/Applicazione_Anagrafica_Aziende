<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <title>Pagina Iniziale</title>
  </head>
  <?php
  if (empty($_SESSION["user"])){
    echo"<header style='background-color:#ff3333'>
      <h1 align = 'center'>Home</h1>
    </header>";
  }
  else{
    echo"<header style='background-color:#85e085'>
      <h1 align = 'center'>Home</h1>
    </header>";
  }
  ?>
  <body>
    <?php
      if (empty($_SESSION["user"])){
        echo"
          <br><h1 align = 'center'>Non hai effettuato il login, se sei un professore, per poter usufruire di tutte le funzionalità esegui il Login</h1>
          <h2 align = 'center'>Utilizzare credenziali classeviva</h2><br><br>
          <form action='login/login.php' method='post'>
            <table align='center'>
            <tr><td>Scuola</td><td>Nome utente</td><td>Password</td><td></td></tr>
            <tr><td><input type='text' name='scuola' ></td>
            <td><input type='text' name='username' ></td>
            <td><input type='password' name='password' ></td>
            <td><input type='submit' name='invio'></td></tr>
            </table>
          </form>";
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
