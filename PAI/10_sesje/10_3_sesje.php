<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Sesja 3</h3>
    <?php
      //session_destroy();
      unset($_SESSION['name']);
      echo $_SESSION['name'],'<hr>';
    ?>
    <a href="./10_1_sesje.php">Strona domowa</a>
  </body>
</html>
