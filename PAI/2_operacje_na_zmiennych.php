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
  echo "$bin<br>"; // 5

// porównanie
  $x=1;
  $y=1.0;
  if($x===$y){
    echo '$x jest równa $y';
  }
  else{
    echo '$x nie jest równa $y<br>';
  }

  echo "<br>";
  echo gettype($x); //intiger
  echo "<br>";
  echo gettype($y); //double
  echo "<br>";


  $x=10;
  $y=100;
  echo $x <=> $y;
  echo '<hr>';

  $x=1;
  $x=$x++;
  echo $x;  //1
  $x=++$x;
  echo $x;  //2
  $y=$x++;
  echo $x;  //3
  echo $y;  //2
  $y=++$x*2-1;
  echo $x;  //4
  echo $y;  //7

// operatory rzutowania




?>
