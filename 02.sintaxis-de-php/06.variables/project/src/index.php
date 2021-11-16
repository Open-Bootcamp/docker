<!DOCTYPE html>
<html>

<body>

  <h1>Variables</h1>

  <?php
    $txt = "Hola Mundo";
    $x = 5;
    $y = 10.5;
    echo "$txt <br>$x<br>$y<br>";

    // una variable puede tener un corto $a, o un nombre largo
    $nombre_del_coche = "fiat 600";

    /* SCOPE DE VARIABLES - LOCAL
     */
    $x = 5;

    echo 'El valor de $x es '.$x;

    function myTest(){
      $x = 4;
      echo "<p>Variable x dentro de función es: $x</p><br>";
    }
    myTest();
    /* SCOPE DE VARIABLES - GLOBAL
     */
    $x = 5;
    $y = 10;

    function myTest1(){
      global $x, $y;
      $y = $x + $y;
      echo $y. "<br>";

    }
    myTest1();

    $x = 5;
    $y = 10;

    function myTest2(){
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
      echo $GLOBALS['y']. "<br>";

    }
    myTest1();
    /* SCOPE DE VARIABLES - STATIC
     */
    function myTest3(){
      static $x = 0;
      echo $x."<br>";
      $x++;

    }
    myTest3();
    myTest3();
    myTest3();
  ?>
  <a href="./">volver al index</a>
</body>

</html>