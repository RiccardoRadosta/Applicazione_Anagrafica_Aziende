<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <title>Pagina orario</title>
</head>
<body>
  <p>Ecco l'ora attuale</p>
  <?php
    if (empty($_SESSION["user"])){
      header("Location: ../index.php");
    }
    else{
      echo date("H:i:s");
    }
  ?>
   <a href="..\login/logout.php"><h3>Clikkare qui per eseguire il logout</h3></a>
</body>
