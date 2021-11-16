<!DOCTYPE html>
<html>

<body>

  <h1>operador de comparación</h1>

  <?php
  // código php
  ?>
  <?php
    // igual
    $x = 100;
    $y = "100";
    var_dump($x == $y);
    // idéntico
    $x = 100;
    $y = "100";
    var_dump($x === $y);
    // diferente
    $x = 100;
    $y = "100";
    var_dump($x != $y);
    $x = 100;
    $y = "100";
    var_dump($x <> $y);
    // No idéntico
    $x = 100;
    $y = "100";
    var_dump($x !== $y);
    // menor que
    $x = 10;
    $y = 5;
    var_dump($x < $y);
    // mayor que
    $x = 10;
    $y = 5;
    var_dump($x > $y);
    // menor o igual que
    $x = 10;
    $y = 5;
    var_dump($x <= $y);
    // mayor o igual que
    $x = 10;
    $y = 5;
    var_dump($x >= $y);
    // nave espacial
    $a = 5;
    $b = 10;
    echo ($a <=> $b); // retorna -1 porque $a es menor que $b
    echo "<br>";
    $a = 10;
    $b = 10;
    echo ($a <=> $b); // retorna 0 son iguales
    echo "<br>";
    $a = 15;
    $b = 10;
    echo ($a <=> $b); // retorna +1 porque $a es mayor que $b
    echo "<br>";

    // fusión de null
    $var = isset($_GET['foo'])? $_GET['foo'] : "valor_por defecto";
    echo $var;
  ?>
</body>

</html>