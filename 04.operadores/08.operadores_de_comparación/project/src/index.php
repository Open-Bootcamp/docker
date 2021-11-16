<!DOCTYPE html>
<html>

<body>

  <h1>operador de comparación</h1>

  <?php
  // código php
  ?>
  <?php
    $x = 100;
    $y = 50;

    if($x == 100 and $y == 50){
      echo "Es igual<br>";
    }else{
      echo "Es distinto<br>";
    }

    if($x == 100 && $y == 50){
      echo "Es igual<br>";
    }else{
      echo "Es distinto<br>";
    }

    if($x == 100 or $y == 50){
      echo "Es igual<br>";
    }else{
      echo "Es distinto<br>";
    }

    if($x == 100 || $y == 50){
      echo "Es igual<br>";
    }else{
      echo "Es distinto<br>";
    }

    if($x == 100 xor $y == 50){
      echo "Es igual<br>";
    }else{
      echo "Es distinto<br>";
    }

    $a = true;
    if(!$a){
      echo "Es false<br>";
    }else{
      echo "Es true<br>";
    }
  ?>
</body>

</html>