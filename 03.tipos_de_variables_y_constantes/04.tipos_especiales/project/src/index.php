<!DOCTYPE html>
<html>

<body>

  <h1>Tipos especiales</h1>

  <?php
    $file = fopen("test.txt", "r");

    // Output
    while(!feof($file)){
      $line = fgets($file);
      echo $line. "<br>";
    }

    fclose($file);
  ?>

</body>

</html>