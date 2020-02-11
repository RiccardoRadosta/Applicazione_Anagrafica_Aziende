<?php session_start();
include "db_connect.php";
#############################
function create_table(){
  $query = "SELECT Tipologia from Aziende";
  $stmt = $con->prepare( $query );
  $stmt->execute();
  $num = $stmt->rowCount();
  if ($num > 0){
    echo("<tbody>"):
    for ($i=0; $i < $num; $i++){
      $riga = $stmt->fetch(PDO::FETCH_NUM);
      foreach($riga as $key => $value){

      }
    }
  }

            echo "<table border='1'>";
                echo "<tr>";
                    echo "<th> N. </th>";
                    echo "<th>id </th>";
                    echo "<th>nome</th>";
                echo "</tr>";

                $np=1;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>";
                        echo "<td>".$np."</td>";
                        $np++;

                        echo "<td>".$row['ArtistId']."</td>";
                        echo "<td>".$row['name']."</td>";

                    echo "</tr>";
                }
            echo "</table>";
        }
        else{
            echo "No records found.";
        }
    }
  ###########################################
}?>
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
        echo "<h3>Buongiorno professor *****. </h3>";
        echo "<a href=\"login/logout.php\"><input name='button' value='Logout' style=' color: #191919; background-color: #e60000;' type='submit'></a>";
        create_table();
      }
     ?>
  </body>
  <?php
  if (empty($_SESSION["user"])){
    echo"<footer style='background-color:#ff3333'>
    </footer>";
  }
  else{
    echo"<footer style='background-color:#85e085'>
    </footer>";
  }
  ?>
</html>
