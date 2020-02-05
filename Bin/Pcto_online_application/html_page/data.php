<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <title>Pagina data</title>
</head>
<body>
  <p>Ecco la data attuale</p>
  <?php
    if (empty($_SESSION["user"])){
      header("Location: ../index.php");
    }
    else{
      echo date("d/m/y");
    }
  ?>
   <a href="..\login/logout.php"><h3>Clikkare qui per eseguire il logout</h3></a>
</body>
