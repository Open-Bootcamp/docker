<!DOCTYPE html>
<html>

<body>

  <h1>variables GLOBALES</h1>

  <?php

    // PHP ofrece una serie de variables globales
    // var_dump($GLOBALS);
    // var_dump($_SERVER);
    // var_dump($_REQUEST);
    // var_dump($_POST);
    // var_dump($_GET);
    // var_dump($_FILES);
    // var_dump($_ENV);
    // var_dump($_COOKIE); 
    // var_dump($_SESSION);   
    
    $x = 75;
    $y = 25;

    function addition(){
      echo $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo "<br>";

  ?>
  <a href="./01.server.php">01.server</a><br>
  <a href="./02.request.php">02.request</a><br>
</body>

</html>