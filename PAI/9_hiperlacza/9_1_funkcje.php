<?php
  if (isset($_GET['funkcja'])){
    require_once '9_2_funkcje.php';
    echo test();
    echo 'Hiperłącze';
  }
  else{
    echo 'Brak hiperłącza';
  }


?>
