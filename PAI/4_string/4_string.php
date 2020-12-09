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

// USUWANIE BIAŁYCH ZNAKÓW
  $name = "Anna";
  $name1 = "  Anna ";
  echo strlen($name); //4
  echo strlen($name1); //7

  echo strlen(rtrim($name1)); //6 - CZYŚCI Z PRAWEJ STRONY
  echo strlen(ltrim($name1)); //5 - CZYŚCI Z LEWEJ STRONY
  echo strlen(trim($name1)); //4 - CZYŚCI WSZYSTKIE

// PRZESZUKIWANIE CIĄGÓW ZNAKÓW
  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = strstr($address, "tel");
  echo $search,'<br>'; //tel. (61) 123-45-67

  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = strstr($address, "tel", true);
  echo $search,'<br>'; //Poznań ul. Szwajcarska 1,

  $address = "Poznań ul. Szwajcarska 1, tel. (61) 123-45-67";
  $search = stristr($address, "Tel");
  echo $search,'<br>'; //tel. (61) 123-45-67

  echo strstr('zsk@gmail.com', '@'),'<br>'; //@gmail.com
  echo strstr('zsk@gmail.com', 64),'<br>'; //@gmail.com
    // @ to w ASCI "64"

  $name = 'Janusz';
  echo substr($name, 2); //nusz
  echo substr($name, 2, 2); //nu

  echo substr(strstr('zsk@gmail.com', '@'), 1); //gmail.com

// PRZETWARZANIE CIĄGÓW ZNAKÓW
  $replace = str_replace("%name%" , " Anna ", "Masz na imię: %name%");  // zamieni wszystkie %name% na Annę
  echo $replace,'<br>';

  $login = "bączek";
  echo strlen($login); //7  Polski znak ma 2 bajty, więc liczony jest jako 2
  echo mb_strlen($login); //6

  echo "<hr>Login: $login<br>";
  $censure = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
  $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

  $correctLogin = str_replace($censure, $replace, $login);
  echo "Poprawny login: $correctLogin";



?>
