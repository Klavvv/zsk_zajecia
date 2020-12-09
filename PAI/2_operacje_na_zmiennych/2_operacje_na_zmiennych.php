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

  $test1='123abc45';
  $test2=0;
  $test3=20;

  echo '<br>Typ danych $test: ',gettype($test1),' ----- ';
  echo $test1,'<br>';
  echo (int)$test1;

  echo '<br>Typ danych $test: ',gettype($test2),' ----- ';
  echo $test2,'<br>';
  echo (bool)$test2;

  echo '<br>Typ danych $test: ',gettype($test3),' ----- ';
  echo $test3,'<br>';
  echo (float)$test3;

// rozmiar typu intiger

  echo '<hr>';
  echo PHP_INT_SIZE;  //8

// kontrola typu zmiennej
// is_int(), is_float(), is_string(), is_bool(), is_null()

  $x=1;
  $y=null;
  echo '<hr>',is_int($x),'<br>';
  echo is_float($x),'<br>';
  echo is_bool($x),'<br>';
  echo is_null($y),'<br>';

// operator ignorowania błędów @
  $w;
  echo '<hr>',$w,'<br>';
  echo @gettype($w);

?>
