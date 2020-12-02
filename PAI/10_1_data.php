<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dane</title>
    <style media="screen">
      input{margin:3px;}
    </style>
  </head>
  <body>
    <?php
      if (isset($_POST['button'])) {
        for ($i=0; $i < count($_POST); $i++) {
          echo "<ul>";
          if(!empty($_POST["element$i"])){
            echo "<li>".$_POST["element$i"]."</li>";
          }
          echo "</ul>";
        }
      }else if(!empty($_POST['count'])){
    ?>
      <h4>Wprowadź dane</h4>
      <form method="post">
        <?php
          for ($i=0; $i < $_POST['count']; $i++) {
            // echo '<input type="text" name="element" placeholder="Element: $i"><br>';
            echo "<input type=\"text\" name=\"element$i\" placeholder=\"Element: $i\"><br>";
          }

        ?>

        <input type="submit" value="Pokaż listę" name="button">
      </form>
    <?php
      }else{
        header['location: ./10_form_listy.php'];

      }

    ?>

  </body>
</html>
