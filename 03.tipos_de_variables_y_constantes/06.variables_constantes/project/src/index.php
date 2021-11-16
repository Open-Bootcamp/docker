<!DOCTYPE html>
<html>

<body>

  <h1>constantes</h1>

  <?php
    // las variables son case sensitive
    $mivariable = "mi variable";
    echo $mivariable;
    // el siguiente ejemplo da fallo
    // echo $Mivariable;

    const NOMBRE1 = "un valor";
    var_dump(NOMBRE1);
    define('NOMBRE2', "otro valor");
    var_dump(NOMBRE2);

    define("ANIMALES", ["gato","perro"]);
    var_dump(ANIMALES);

    // PHP ofrece una serie de constantes predefinidas
    var_dump(__LINE__);
    var_dump(__FILE__);
    var_dump(__DIR__);
    var_dump(__FUNCTION__);
    
  ?>

</body>

</html>