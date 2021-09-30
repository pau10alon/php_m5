<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
            $integer = 65567;
            $double =  -1.2;
            $string1 = "Hola, me llamo";
            $boolean = FALSE;
            $string2 = "Pablo";
            
            echo "<h1>Ejercicio 1:</h1>";
            if (is_integer($integer)) {
                echo 'El valor de '.$integer.' is an integer?'." TRUE".'<br>';
            } else {
                echo 'El valor de '.$integer.' is an integer? '." FALSE".'<br>';
            }

            if (is_double($double)) {
                echo 'El valor de '.$double.' is a double?'." TRUE".'<br>';
            } else {
                echo 'El valor de '.$double.' is a double?'." FALSE".'<br>';
            }

            if (is_string($string1)) {
                echo 'El valor de "'.$string1.'" is a string?'." TRUE".'<br>';
            } else {
                echo 'El valor de "'.$string1.'" is a string?'." FALSE".'<br>';
            }
            if (is_bool($boolean)) {
                echo 'El valor de '.$boolean.' is a boolean?'." TRUE".'<br>';
            } else {
                echo 'El valor de '.$boolean.' is a boolean?'." FALSE".'<br>';
            }

            echo '<br>.<br>';
            echo '<h1>Ejercicio 2:</h1>';
            echo 'El string1: "'.$string1.'" tiene '.strlen($string1).' caracteres.<br>'; 
            echo 'El string2: "'.$string2.'" tiene '.strlen($string2).' caracteres.<br>';
            echo 'El string1: "'.$string1.'" al revés "'.strrev($string1).'"<br>'; 
            echo 'El string2: "'.$string2.'" al revés "'.strrev($string2).'"<br>';
            echo 'Los dos string juntos "'.$string1.' '.$string2.'"';

            echo '<br>.<br>';
            echo '<h1>Ejercicio 3:</h1>';

            define("NOMBRE", "Pablo");
            echo 'El alumno '.NOMBRE.' está apuntado en ITAcademy. ';
    ?>
    
</body>
</html>
