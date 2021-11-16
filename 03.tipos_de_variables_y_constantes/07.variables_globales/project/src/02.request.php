<!DOCTYPE html>
<html>

<body>

  <h1>$_REQUEST</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    Name: <input type="text" name="fname">
    <input submit type="submit">
  </form>

  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = $_REQUEST['fname'];
      if(empty($name)){
        echo "Name is empty<br>";

      }else{
        echo $name."<br>";
      }
    }
  ?>
  <a href="./">volver al index</a>
</body>

</html>