<!DOCTYPE html>
<html>

<body>

  <h1>operador de asignación</h1>

  <?php
  // código php
  ?>
  <?php
    $a = 3;
    $b = $a;
    echo $a." - ".$b."<br>";

    //
    $b = 6;
    $b += 3;
    echo $b."<br>";
    //
    $b = 6;
    $b -= 3;
    echo $b."<br>";
    //
    $b = 6;
    $b *= 3;
    echo $b."<br>";
    //
    $b = 6;
    $b /= 3;
    echo $b."<br>";
    //
    $b = 6;
    $b %= 3;
    echo $b."<br>";

    // 
    $a = "Hola";
    $b = $a;
    $b .= " Mundo";
    echo $b."<br>";

    // &
    $a = 6;
    $b = &$a;

    echo "$a + $b + (6+1) = ". ($a+$b+$a+1)."<br>";
    $c = $a++;
    echo "$a + $b + $c = ".($a+$b+$c);
  ?>
</body>

</html>