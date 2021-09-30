<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 2</title>
</head>
<body>
    <?php
    echo '<h1>Ejercicio 1:</h1>';

    $arr1 = array(2,4,6,8,10);
    print_r($arr1);
    echo '<br>';
    $arr2 = array(1,3,5);
    print_r($arr2);

    echo '<h1>Ejercicio 2:</h1>';
    array_push($arr2, 7);
    echo 'Los valores son: '.$arr2[0].','.$arr2[1].','.$arr2[2].','.$arr2[3].'.'; 

    echo '<h1>Ejercicio 3:</h1>';
    $arr3 = (array_merge($arr1,$arr2));
    print_r($arr3);
    echo '<br>';
    echo count($arr3).' elementos contiene el array merge.';

    echo '<h1>Ejercicio 1 nivel 3:</h1>';
    
    for ($i=0;$i<count($arr3);$i++){
    echo $arr3[$i].' en la posición '.$i.'<br>';
    }


    ?>
</body>
</html>
