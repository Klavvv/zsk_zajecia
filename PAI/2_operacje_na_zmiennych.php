<?php
  // wersja php
  echo PHP_VERSION,'<br>';

  // echo phpinfo()
  // interpolacja
  echo 'a','b','c<br>'; // show a show b show c
  echo 'a'.'b'.'c<br>'; // a+b+c show abc

  $pow=2**10;
  echo "$pow<br>";

  // operatory bitowe
  // and &, or |, not ~, xor ^, <<, >>
  $bin=0b1010;
  echo "<br>$bin<br>";

  $bin=$bin<<2; // 101000
  echo $bin; //40

  $bin=$bin >> 3; // 101
  echo $bin; // 5


?>
