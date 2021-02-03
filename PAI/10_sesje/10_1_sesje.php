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
    <h3>Strona domowa</h3>
    <?php
      $_SESSION['name'] = 'Janusz';
      echo $_SESSION['name'],'<hr>';
    ?>
    <a href="./10_2_sesje.php">sesja1</a>
  </body>
</html>
