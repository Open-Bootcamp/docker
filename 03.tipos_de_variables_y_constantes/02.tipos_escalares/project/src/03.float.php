<!DOCTYPE html>
<html>

<body>

  <h1>Tipos float</h1>

  <?php
  // código php
  ?>
  <?php
    // desbordamiento en sistemas
    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;
    // diferencia absoluta
    if(abs($a - $b) < $epsilon){
      echo true;
    }
    // desbordamiento en sistemas
    $numero_grande = 9223372036854775807;
    var_dump($numero_grande);
    $numero_grande = 9223372036854775808;
    var_dump($numero_grande);
    // 
    $a = 1.234;
    var_dump($a);
    $b = 1.2e3;
    var_dump($b);
    $c = 7E-10;
    var_dump($c);
  ?>

<a href="./">volver al index</a>
</body>

</html>