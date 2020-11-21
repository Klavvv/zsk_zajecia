<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zadanie Domowe</title>
    <style media="screen">
      body{background-color: #111; color: #fff;}
      input{height: 50px; font-size: 20px; min-width: 50px; background-color: #333; color:white;}
      select{height: 55px; width: 50px; font-size: 20px;background-color: #333; color:white;}
      h4{font-size: 30px;}
    </style>
  </head>
  <body>
    <h4>KALKULATOR <i>5000</i></h4>
    <form method="get">
      <input type="text" name="a" placeholder="A" autofocus>
      <select name="operacja">
        <option value="dodawanie">+</option>
        <option value="odejmowanie">-</option>
        <option value="mnozenie">*</option>
        <option value="dzielenie">/</option>
      </select>
      <input type="text" name="b" placeholder="B">
      <input type="submit" name="btn" value="=">
      <input type="text" name="w" id="w" disabled value="<?php require_once 'function.php'; calculate();?>">
    </form>
  </body>
</html>
