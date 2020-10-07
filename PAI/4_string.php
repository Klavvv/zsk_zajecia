<?php

// AUTOMATYCZNE BREAKI (BR)
$text=<<<T
  ZSK - Zespół
  Szkół
  Komunikacji<br><hr>
T;
echo $text;
echo nl2br($text);


$name='JANuSz<br>';
echo "$name";
// ZAMIANA NA MAŁE LITERY
echo strtolower($name);

// ZAMIANA NA DUŻE LITERY
echo strtoupper($name);

// ZAMIANA PIERWSZEJ LITERY NA DUŻĄ
$name="jaNuSz noWaK<br>";
echo ucfirst($name);

// ZAMIANA WSZYSTKICH PIERWSZYCH LITER NA DUŻE
  // 1
$name="jaNuSz noWaK<br>";
echo ucwords($name);
  // 2
$name = <<<T
  janusz<br>
T;
echo ucfirst($name),'<hr>';

//
$lorem=<<<LOREM

  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

echo $lorem,'<br><br>';
echo wordwrap($lorem,40,'<br>');

// CZYSZCZENIE OBRAZU
// ob_clean()



?>
