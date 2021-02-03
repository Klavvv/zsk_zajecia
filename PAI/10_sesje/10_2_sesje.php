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
    <h3>Sesja 2</h3>
    <?php
      $_SESSION['name'] = 'Nowak';
      echo print_r($_SESSION),'<hr>';

      // unset($_SESSION['name']);
      echo $_SESSION['name'],'<hr>';
    ?>
    <a href="./10_3_sesje.php">sesja2</a>
  </body>
</html>
