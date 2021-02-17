<?php
//tablice sortowanie
  $tab = array(20,1,5,75,-10,8);

  function t($tab){
    foreach ($tab as $value) { echo "$value "; }
    echo '<br>';}

  t($tab);

  // niemalejąco
  sort($tab);
  t($tab);

  // nierosnąco
  rsort($tab);
  t($tab);

  // SORTOWANIE STRINGÓW
  echo "<hr>";
  $names = array('Katarzyna','Paweł','Anna','Tomasz');
  t($names);

  sort($names);
  t($names);

  // zamiana na małe litery
  function replace_to_lower($tab){
    foreach ($tab as $key => $value) {
      $replace = strtolower($value);
      $tab[$key] = $replace;
      echo "$replace ";
    }
    echo '<br>';
  }

  replace_to_lower($names);
  t($names);
  sort($names);
  t($names);

  echo "<hr>";
  // sortowanie tablic asocjacyjnych
  $tabAsoc = array(
    'name' => 'Paweł',
    'surname' => 'Nowak',
    'age' => 20,
    'city' => 'Poznań'
  );
  t($tabAsoc);


  // według wartości
  asort($tabAsoc);
  t($tabAsoc);
  print_r($tabAsoc);


  // według wartości
  arsort($tabAsoc);
  t($tabAsoc);


  // według klucza
  ksort($tabAsoc);
  t($tabAsoc);

  // według klucza
  krsort($tabAsoc);
  t($tabAsoc);
  print_r($tabAsoc);
















?>
