<?php
if (isset($_POST["username"]) && isset($_POST["password"])){
      $scuola='VRIT0007';
      $password = $_REQUEST["password"];
      $username= $_REQUEST["username"];
      $url = 'https://web.spaggiari.eu/services/ws/wsExtAuth.php?wsdl';
      $client = new SoapClient($url );
      $result = $client->__soapCall("wsExtAuth..ckAuth",    array(
                      'cid' =>$scuola,
                      'login' =>$username,
                      'password' => $password));
    if(!empty($result[0])){
      header("Location: ../index.php");
      #print("errore !!<br>");
      #print($result[0]);
      #print($result[1]);
      #print($result[2]);
    }
    else{
      $info = (array) $result[2];			//echo $result;
      $nome = $info["nome"];
      $Cognome = $info["cognome"];
      session_start();
      $_SESSION["user"] = $Cognome." ".$nome;
      var_dump($_SESSION["user"]);
      print($result[0]);
      print($result[1]);
      #print($result[2]);
      header("Location: ../index.php");
      exit();

    }
}
else{
  header("Location: ../index.php");
}
?>
