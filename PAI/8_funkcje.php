<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane</h4>
    <form method="get">
      <input type="text" name="name" placeholder="Imię" autofocus><br>
      <input type="text" name="surname" placeholder="Nazwisko" autofocus><br>
      <input type="submit" name="Wyślij dane"><hr>
    </form>
    <?php
      require_once '7_funkcje.php';
      

      echo show("Mariusz","Pudzianowski");




    ?>

  </body>
</html>
