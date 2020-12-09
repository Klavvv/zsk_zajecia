<?php
// podstawa
  $name="Janusz";
  $surname="Nowak";
  echo "Imię:$name<br>";
  echo 'Imię:$name<br>';
  // konkatenacja .
  echo "Nazwisko:$surname"."<br>";

// typy danych
  // boolean
  $prawda=true;
  $fałsz=false;
  echo $prawda; //1
  echo "$fałsz<br>"; //nic nie wyświetli

  // intiger
  $bin=0b1011; //11
  $oct=011; //9
  $dec=11; //11
  $hex=0xA; //10
  echo "$hex<hr>";

  // składnia heredoc
  $name='Janusz';
  $surname='Nowak';

  $text=<<<LABEL
  Imię: $name<br>
  Nazwisko: $surname<br>
  <hr>
  LABEL;
  echo $text;

  echo <<<L
  heredoc 2<br>
  Imię: $name<hr>
  L;

  // nowdoc
  echo <<<'L'
  nowdoc<br>
  Imię: $name<hr>
  L;

  $city="Poznań";
  echo "Nazwa zmiennej: \$city<br>";
  echo "Nazwa zmiennej: $city";




?>
