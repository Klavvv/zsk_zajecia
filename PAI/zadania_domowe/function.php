<?php

function calculate(){
  if(!empty($_GET['a']) && !empty($_GET['b'])){
    if(is_numeric($_GET['a']) && is_numeric($_GET['b'])){
      $a = $_GET['a'];
      $b = $_GET['b'];
      $operacja = $_GET['operacja'];

      switch($operacja){
        case "dodawanie":
          dodawanie($a,$b);
          break;
        case "odejmowanie":
          odejmowanie($a,$b);
          break;
        case "mnozenie":
          mnozenie($a,$b);
          break;
        case "dzielenie":
          dzielenie($a,$b);
          break;
        }
      }
    else{echo "Błędne wartości!";}
  }
  else{echo "Puste pola!";}
}

function dodawanie($a,$b){echo $a+$b;}
function odejmowanie($a,$b){echo $a-$b;}
function mnozenie($a,$b){echo $a*$b;}
function dzielenie($a,$b){echo $a/$b;}

?>
