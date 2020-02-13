<?php
include "db_connect.php";
$query = "SELECT * from Aziende";
$stmt = $con->prepare( $query );
$stmt->execute();
$num = $stmt->rowCount();
if ($num > 0){
  echo("<table>");
  for ($i=0; $i < $num; $i++){
    $conta = 0;
    $riga = $stmt->fetch(PDO::FETCH_NUM);
    echo "<tr>";
    foreach($riga as $key => $value){
      $conta = $conta + 1;
      if (($conta != 7) and ($conta != 8)){
        echo "<td>$value</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "No data founded";
}
 ?>
