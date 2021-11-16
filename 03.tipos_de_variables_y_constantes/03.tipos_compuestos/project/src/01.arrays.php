<!DOCTYPE html>
<html>

<body>

  <h1>Tipos arrays</h1>

  <?php
    $array_a = array("foo" => "bar", "bar" => "foo");
    var_dump($array_a);
    $array_a = [
      "foo" => "bar", 
      "bar" => "foo"
    ];
    var_dump($array_a);
    // 
    $array = [
      "foo" => "bar", 
      "bar" => "foo",
      100 => -100,
      -100 => 100
    ];
    var_dump($array);
    //
    $frutas = [
      "frutas" => [
        "a" => "naranja",
        "b" => "platano",
      ],
      "numeros" => [1,2,3]
    ];
    var_dump($frutas);
  ?>


  <a href="./">volver al index</a>
</body>

</html>