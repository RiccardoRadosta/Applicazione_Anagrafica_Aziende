<?php

#$host = "remotemysql.com";
#$db_name = "Q1pyVGXE2Q";
#$username = "Q1pyVGXE2Q";
#$password = "uv8sQq6Ofc";

$host = "localhost";
$db_name = "db_anagrafica_az";
$username = "root";
$password = "";

$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
try {

}
catch(PDOException $exception){
    echo "<script>console.log(".$exception->getMessage().");</script>";
}
?>
