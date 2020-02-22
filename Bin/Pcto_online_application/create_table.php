<?php
include "db_connect.php";
$conta = 0;
$query = "SELECT * from aziende";
$stmt = $con->prepare( $query );
$stmt->execute();
$num = $stmt->rowCount();
if ($conta == 0){
  echo("<table border = '1'>");
  echo("<tr><td><h1>Id</h1></td><td><h1>Tipologia</h1></td><td><h1>Ragione_sociale</h1></td><td><h1>Comune</h1></td><td><h1>Provincia</h1></td><td><h1>Indirizzo</h1></td><td><h1>CAP</h1></td><td><h1>Telefono</h1></td><td><h1>Email</h1></td><td><h1>Sito_Web</h1></td><td><h1>Dipendenti</h1></td><td><h1>Data_convenzione</h1></td><td><h1>Settore</h1></td><td><h1>Codice_ATECO</h1></td><td><h1>Descrizione</h1></td></tr>");
  $conta = $conta + 1;
}
if ($num > 0 and $conta !=0){
  for ($i=0; $i < $num; $i++){
    $conta = 0;
    $riga = $stmt->fetch(PDO::FETCH_NUM);
    echo "<tr>";
    foreach($riga as $key => $value){
      #$conta = $conta + 1;
      #if (($conta != 7) and ($conta != 8)){
        echo "<td>$value</td>";
      #}
    }
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "No data founded";
}
 ?>
