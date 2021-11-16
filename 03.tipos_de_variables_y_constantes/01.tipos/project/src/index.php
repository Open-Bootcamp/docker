<!DOCTYPE html>
<html>

<body>

  <h1>Tipos en PHP</h1>

  <?php
  // código php
  ?>
  <?php
    $data = [1, 1.4, NULL, new stdClass, "bar"];

    foreach($data as $value){
      echo gettype($value)."<br>";
    }
  ?>

  <a href="./otro-ejemplo.php">otro ejemplo</a>
</body>

</html>