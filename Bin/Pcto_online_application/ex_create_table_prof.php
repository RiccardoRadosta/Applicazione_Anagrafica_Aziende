<?php
include "db_connect.php";
$query = "SELECT * from Aziende";
$stmt = $con->prepare( $query );
$stmt->execute();
$num = $stmt->rowCount();

#if ($conta == 0){

#}
#elseif ($num > 0 and $conta !=0){
if ($num > 0){
  echo("<table border = '2'>");
  echo("<tr><td><h1>Id</h1></td><td><h1>Tipologia</h1></td><td><h1>Ragione_sociale</h1></td><td><h1>Comune</h1></td><td><h1>Provincia</h1></td><td><h1>Indirizzo</h1></td><td><h1>CAP</h1></td><td><h1>Telefono</h1></td><td><h1>Email</h1></td><td><h1>Sito_Web</h1></td><td><h1>Dipendenti</h1></td><td><h1>Data_convenzione</h1></td><td><h1>Settore</h1></td><td><h1>Codice_ATECO</h1></td><td><h1>Descrizione</h1></td></tr>");
  #echo("<tr><td><h4>Id</h4></td><td><h4>Tipologia</h4></td><td><h4>Ragione_sociale</h4></td><td><h4>Comune</h4></td><td><h4>Provincia</h4></td><td><h4>Indirizzo</h4></td><td><h4>CAP</h4></td><td><h4>Sito_Web</h4></td><td><h4>Dipendenti</h4></td><td><h4>Data_convenzione</h4></td><td><h4>Settore</h4></td><td><h4>Codice_ATECO</h4></td><td><h4>Descrizione</h4></td></tr>");
  #echo("<tr><td><h4>Id</h4></td><td><h1>Tipologia</h1></td><td><h1>Ragione_sociale</h1></td><td><h1>Comune</h1></td><td><h1>Provincia</h1></td><td><h1>Indirizzo</h1></td><td><h1>CAP</h1></td><td><h1>Sito_Web</h1></td><td><h1>Dipendenti</h1></td><td><h1>Data_convenzione</h1></td><td><h1>Settore</h1></td><td><h1>Codice_ATECO</h1></td><td><h1>Descrizione</h1></td></tr>");


  for ($i=0; $i < $num; $i++){
    $conta = 0;
    $riga = $stmt->fetch(PDO::FETCH_NUM);
    echo "<tr>";
    foreach($riga as $key => $value){
      #if (($conta != 7) and ($conta != 8)){
        echo "<td>$value</td>";
        #var_dump($riga);
      #}
      $conta = $conta + 1;
    }
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "No data founded1";
}
 ?>
