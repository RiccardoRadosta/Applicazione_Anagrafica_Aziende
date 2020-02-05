<?php
if (isset($_POST["scuola"]) && isset($_POST["username"]) && isset($_POST["password"])){
      $scuola=$_REQUEST["scuola"];
      $password = $_REQUEST["password"];
      $user= $_REQUEST["username"];
      $url = "https://web.spaggiari.eu/services/ws/wsExtAuth.php?wsdl";
      $client = new SoapClient( $url );
      $result = $client->__soapCall("wsExtAuth..ckAuth",    array(
                      'cid' =>$scuola,
                      'login' =>$user,
                      'password' => $password));
    if(!empty($result[0])){
        print("errore !!<br>");
      print($result[1]);
    }
    else{
      $info=$result[2];			//echo $result;
      session_start();
      $_SESSION["user"] = $user;
      print($result[0]);
      print($result[1]);
      #print($result[2]);
      #header("Location: ../index.php");
      exit();

    }
}
else{
  header("Location: login.html");
}
 ?>
