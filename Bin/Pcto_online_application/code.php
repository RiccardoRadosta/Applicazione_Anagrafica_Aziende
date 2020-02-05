<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Risultato numeri primi</title>
  </head>
  <body align = "center">
        <?php
          //var_dump($_POST);
          switch ($_POST["invio"]) {
            case 'Primi':
              Primi();
              break;
            case 'Dispari':
              Dispari();
              break;
            case 'Pari':
              Pari();
              break;
            case 'Pitagorica':
              Pitagorica();
              break;

            default:
              echo "errore";
              break;
          }

          function Primi(){
            $n = $_POST["n"];
            print "<h2>Numeri primi da 0 a $n</h2>";
            $cr = false;
            for ($i=0; $i < $n; $i++) {
              $cr = false;
              for ($j=2; $j < $i; $j++) {
                if ($i % $j == 0){
                  $cr = true;
                  break;
                }
              }
              if ($cr == false){
                print "<p>$i</p>\n";
              }
            }
          }

          function Dispari(){
            $n = $_POST["n"];
            print "<h2>Numeri dispari da 0 a $n</h2>";
            for ($i=0; $i < $n; $i++) {
              if ($i % 2 != 0){
                echo("<p>$i</p>\n");
              }
            }
          }

          function Pari(){
            $n = $_POST["n"];
            print "<h2>Numeri pari da 0 a $n</h2>";
            for ($i=0; $i < $n; $i++) {
              if ($i % 2 == 0){
                echo("<p>$i</p>\n");
              }
            }
          }

          function Pitagorica(){
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            print "<h2>Tabella pitagorica di lunghezze $n1 e $n2</h2>";
            print("<table align=\"center\">\n");
            for ($i=1; $i < $n1; $i++) {
              print("<tr>\n");
              for ($j=1; $j < $n2; $j++) {
                $num = $i * $j;
                print("<th>$num</th>\n");
              }
              print("</tr>\n");
            }
            print("</table>");
          }
        ?>
        <a href="index.php">Back to home</a>
  </body>
</html>
