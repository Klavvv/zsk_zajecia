<?php


  function funkcja_1()
    {return 'Janusz';}

  function sum($x,$y)
    {return $x+$y;}

  function sum_float(int $x, float $y)
    {return $x+$y;}

  echo funkcja_1(),"<br>";
  echo sum(2,4),"<br>";
  echo sum_float(2,2.4),"<br>";



  include "6_1_funkcje.php";
  echo show("Jan","Kowalski");




 ?>
