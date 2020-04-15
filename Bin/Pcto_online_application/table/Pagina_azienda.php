<?php session_start();
?>
<?php
  $name = $_POST['nome'];
  echo"<title>$name </title>
  <h1 align='center'>$name</h1>";
   echo"<body style='background-color:#ffcce6'>";
  include "../db_connect.php";
  $array = [];
  if (!isset($_SESSION["user"])){
    $query = "SELECT Id, Tipologia, Ragione_sociale, Comune, Provincia, Indirizzo, CAP, Sito_Web, Dipendenti, Settore, Codice_ATECO, Descrizione
    from Aziende where Ragione_sociale = '$name'";
    $array = ["Id", "Tipo_Azienda", "Ragione_sociale", "Comune", "Provincia", "Indirizzo", "CAP", "Sito_Web", "N_Dipendenti", "Indirizzo_Scolastico", "Codice_ATECO", "Descrizione_Lavoro"];
  }
  else{
    $query = "SELECT * from Aziende where Ragione_sociale = '$name'";
    $array = ["Id", "Tipo_Azienda", "Ragione_sociale", "Comune", "Provincia","CAP", "Indirizzo", "Telefono","Email", "Sito_Web", "N_Dipendenti","Data_convenzione", "Indirizzo_Scolastico", "Codice_ATECO", "Descrizione_Lavoro"];
  }
  $stmt = $con->prepare( $query );
  $stmt->execute();
  $num = $stmt->rowCount();

  if ($num > 0){
    echo("<table border = '3' align = 'center' bgcolor='white'>");
    for ($i=0; $i < $num; $i++){
      $conta = 0;
      $riga = $stmt->fetch(PDO::FETCH_NUM);
      foreach($riga as $key => $value){
          echo"<tr>";
          echo "<td>$array[$conta]</td>";
          echo "<td>$value</td>";
          $conta = $conta + 1;
          echo"</tr>";
      }
    }
    echo "</table>";
  }
  else{
    echo "No data founded";
  }
 ?>
