<!DOCTYPE html>
<html>

<body>

  <h1>operadores</h1>

  <?php
  // código php
  ?>
  <?php
    $a = 2 + 3 * 8;
    var_dump($a);
    $b = (2 + 3) * 8; 
    var_dump($b);
    $c = 2 + (3 * 8); 
    var_dump($c);
    // otro ejemplo
    $a = 2;
    $b = 3;
    $c = 8;
    var_dump($a - $b - $c);
    var_dump(($a - $b) - $c);
    var_dump($a - ($b - $c));
    // operador de asignación, '='
    $c = 8;
    echo $a = $b = $c;


  ?>

  <a href="./otro-ejemplo.php">otro ejemplo</a>
</body>

</html>