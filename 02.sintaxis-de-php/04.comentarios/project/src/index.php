<!DOCTYPE html>
<html>

<body>

  <h1>Comentarios en PHP</h1>

  <?php
    echo "inicio comentarios de una línea<br>";
    // Esto es un comentario de una sola línea "esta línea no se muestra en cliente"
    # Otro tipo de comentario de una sola línea
    echo "fin comentarios de una línea<br>";
    echo "inicio comentario multilínea<br>";
    /* Esto es un comentario
     * multilínea
     */
    echo "fin comentario multilínea<br>";

    // Mi código
    $x = 5 /* +5 */ + 5;
    echo $x."<br>";
  ?>
  <a href="./">volver al index</a>
</body>

</html>