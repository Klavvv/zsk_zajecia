<?php
  $colors = array('biały','zielony','magenta','czerwony');

  echo 'Rozmiar tablic: ',count($colors),'<br>';
  echo 'Pierwszy element tablic: ',$colors[0],'<br>';
  echo 'Ostatni element tablic: ',$colors[count($colors)-1],'<br><br>';

  for($i=0; $i < count($colors); $i++){
    echo 'Kolor ',$i+1,': ',$colors[$i],'<br>';
  }

  $data = array(
    'name' => 'Paweł',
    'surname' => 'Nowak',
    'age' => 30,
  );

  echo $data["name"],'<br>';
  echo '<hr>';

  echo <<<SHOW
  Imię: {$data["name"]}<br>
  Nazwisko: {$data["surname"]}<br>
  SHOW;

  echo '<hr>';

  //foreach
  foreach ($data as $value) {
    echo "$value ";
  }
  echo '<hr>';

  foreach ($data as $key => $value) {
    echo "$key: $value<br>";
  }

  echo '<hr>';

  print_r($data);
  echo '<hr>';
  var_dump($data);

  //tablice wielowymiarowe

  echo '<hr>';
  $students = array(
    array('Jan','Nowak',30,'Poznań'),
    array('Anna','Nowak',42,'Warszawka'),
    array('Krzychu','Pietruszka',654,'Wrocław <3'),
    array('Janusz','Zakała',43,'Poznań')
  );

  foreach ($students as $student){
    foreach ($student as $value) {
      echo "$value ";
    }
    echo "<br>";
  }











?>
