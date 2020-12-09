<?php

// DATE
  echo 'dzień - miesiąć - rok: ',date('d-m-y'),'<br>';
  echo 'dzień - miesiąć - rok: ',date('d-m-Y'),'<br>';
  echo date('M-d-Y'),'<br>';
  echo date('G-i-s'),'<br>';
  echo date('H-i-s'),'<br>';
  echo date('H-i-sa'),'<br>';
  echo date('Ha-ia-sa'),'<br>';
  echo date('d-m-Y H:i:s'),'<br>';
  echo date('w'),'<br>'; // dzień tygodnia, 0-niedziela

// GETDATE
  echo '<hr>';
  $date = getdate();
  print_r($date);

  echo '<br><br>Dzień roku: ',$date['yday'],'<br>';

  // Wyświetl datę w formacie: 18 listopad 2020, 09:15:20 | środa
  $msc_tab=['styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień'];
  $dzien_tab=['niedziela','poniedziałek','wtorek','środa','czwartek','piątek','sobota','niedziela'];

  $miesiac=date('m');
  $miesiac=(int)$miesiac;
  $dzien=date('w');
  $dzien=(int)$dzien;

  echo '<hr>Zadańsko<br><br>';
  echo date('d')," ",$msc_tab[$miesiac-1]," ",date('Y'),", ",date('G:i:s')," | ",$dzien_tab[$dzien];



?>
