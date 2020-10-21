<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Formularze</h4>
    <form method="get">
      <input type="text" name="name" placeholder="Imię" autofocus><br>
      <input type="text" name="surname" placeholder="Nazwisko" autofocus><br>
      <input type="submit" name="Wyślij dane"><hr>
    </form>
    <?php

      // isset()
      if(isset($_GET['surname'])){
        $surname=$_GET['surname'];
        echo "Nazwisko (isset()): $surname<br><hr>";
      }

      // !empty
      if(!empty($_GET['surname']) && !empty($_GET['name'])){
        $surname=$_GET['surname'];
        echo <<<DATA
          Imię: $_GET[name]<br>
          Imię: {$_GET['name']}<br>
          Nazwisko: $surname<br>
        DATA;
      }


    ?>



  </body>
</html>
