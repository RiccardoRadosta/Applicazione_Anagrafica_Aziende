<?php session_start();
?>
<?php
  $comune = $_POST['comune'];
  echo"<title>$comune </title>
  <h1 align='center'>Risultati relativi alla ricerc per: $comune</h1>";
   echo"<body style='background-color:#ffcce6'>";
  include "../db_connect.php";
  $query = "SELECT Tipologia, Ragione_sociale, Comune, Provincia from Aziende where Comune like '%$comune%'";
  $stmt = $con->prepare( $query );
  $stmt->execute();
  $num = $stmt->rowCount();
  if ($num > 0){
    echo("<table border = '2' bgcolor='white' align='center'>");
    echo("</td><td><h4>Tipologia</h4></td><td><h4>Ragione_sociale</h4></td><td><h4>Comune</h4></td><td><h4>Provincia</h4></td></tr>");


    for ($i=0; $i < $num; $i++){
      $conta = 0;
      $riga = $stmt->fetch(PDO::FETCH_NUM);
      echo "<tr>";
      foreach($riga as $key => $value){
          echo "<td>$value</td>";
          #var_dump($riga);
          if ($conta == 1){
            $nominativo = $value;
          }
          $conta = $conta + 1;
      }
      echo"
        <form action='Pagina_azienda.php' method='post'>
        <input type='hidden' name = 'nome' value='$nominativo'/>
        <td><input type='submit' value='mostra' /></td>
        </form>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else{
    echo "No data founded2";
  }
  //<td><a href='Pagina_azienda.php' >Mostra</a></td>
  ?>
