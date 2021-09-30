<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<style>
  body {
    margin: 0 500px;
  }
</style>
<?php
  $x = 17;
  $y = 5;
  $n = 9.5;
  $m = 3.25;

  function calcular($i,$j){
    echo 'La suma es: '.($i+$j).'<br>';
    echo 'La resta es: '.($i-$j).'<br>';
    echo 'El producto es: '.($i*$j).'<br>';
    echo 'La división es: '.($i/$j).'<br>';
    echo 'El módulo es: '.($i%$j).'<br>';
    echo '********************************************************************************************'."<br>";
  }
  function todos($i,$j,$ii,$jj){
    echo 'x+y+n+m = '.($i+$j+$ii+$jj).'<br>';
    echo 'x*y*n*m = '.($i*$j*$ii*$jj).'<br>';
  }
  function doble($i){
    return 2*$i;
  }
  echo '<h1> Ejercicio 2 nivel 3 </h1>';
  
  echo 'x = '.$x.'<br>';
  echo 'y = '.$y.'<br>';
  calcular($x,$y);

  echo 'n = '.$n.'<br>';
  echo 'm = '.$m.'<br>';
  calcular($n,$m);
  echo 'El módulo da 0 porque no tiene sentido buscar el módulo con número float';

  todos($x,$y,$n,$m);

  echo 'El doble de x es: '.doble($x).'<br>';
  echo 'El doble de y es: '.doble($y).'<br>';
  echo 'El doble de n es: '.doble($n).'<br>';
  echo 'El doble de m es: '.doble($m).'<br>';

?>
</body>
</html>

