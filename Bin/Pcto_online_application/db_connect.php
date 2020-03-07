<?php

$host = "remotemysql.com";
$db_name = "Q1pyVGXE2Q";
$username = "Q1pyVGXE2Q";
$password = "uv8sQq6Ofc";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
catch(PDOException $exception){
    echo "<script>console.log(".$exception->getMessage().");</script>";
}
#$host = "localhost";
#$db_name = "anagr";
#$username = "root";
#$password = "";
#try{
#  $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
#}
#catch(PDOException $exception){
#    echo "<script>console.log(".$exception->getMessage().");</script>";
#}
?>
